document.addEventListener('DOMContentLoaded', function () {
  var userLang = (navigator.language || navigator.userLanguage || 'pt').substring(0, 2);
  var defaultLang = 'pt';
  if (userLang === defaultLang) return;

  // define cookie como você já fazia (mantém compatibilidade)
  document.cookie = "googtrans=/auto/" + userLang + ";path=/;";

  // função que tenta aplicar a seleção no select do GTranslate
  function applySelect() {
    try {
      var select = document.querySelector('.gtranslate_wrapper select, .goog-te-combo');

      if (!select) {
        // tentar selects alternativos que algumas integrações usam
        select = document.querySelector('select[id^="goog-translate"]') || document.querySelector('select[data-gtranslate]');
      }
      if (!select) return false; // não encontrado (talvez esteja em iframe)

      // encontrar a option que corresponde ao idioma
      var option = Array.from(select.options).find(function (opt) {
        var v = (opt.value || '').toLowerCase();
        var t = (opt.text || '').toLowerCase();
        return v.indexOf('/' + userLang) !== -1 || v === userLang || t.indexOf(userLang) !== -1;
      });

      if (!option) {
        // tenta encontrar por código simples (ex: "en")
        option = Array.from(select.options).find(function (opt) {
          return (opt.value || '').toLowerCase().indexOf(userLang) !== -1;
        });
      }

      if (!option) return false;

      // aplica valor e dispara eventos várias vezes (robustez)
      select.value = option.value;
      select.setAttribute('value', option.value);

      var evChange = new Event('change', { bubbles: true });
      var evInput = new Event('input', { bubbles: true });

      select.dispatchEvent(evInput);
      select.dispatchEvent(evChange);

      // às vezes GTranslate substitui o select depois de um tempo — reaplicamos em timeout curto
      setTimeout(function () {
        try {
          select.value = option.value;
          select.dispatchEvent(evInput);
          select.dispatchEvent(evChange);
        } catch (e) {}
      }, 700);

      // tenta também clicar na option (algumas integrações observam o click)
      try {
        option.selected = true;
        option.click && option.click();
      } catch (e) {}

      console.log('autoTranslate: select aplicado ->', userLang);
      return true;
    } catch (err) {
      // se o select estiver dentro de iframe cross-origin, acesso lançará erro
      console.warn('autoTranslate: erro ao aplicar select (possível iframe cross-origin).', err);
      return false;
    }
  }

  // 1) tenta aplicar imediatamente algumas vezes
  var immediateTries = 0;
  var immediateInterval = setInterval(function () {
    immediateTries++;
    if (applySelect() || immediateTries > 10) {
      clearInterval(immediateInterval);
    }
  }, 300);

  // 2) fallback: observar mudanças no DOM e reaplicar quando necessário
  var observer = new MutationObserver(function (mutations) {
    // cada vez que houver mutação, tenta aplicar (não muito pesado)
    applySelect();
  });

  try {
    observer.observe(document.body, { childList: true, subtree: true });
  } catch (e) {
    // se não puder observar, apenas logamos
    console.warn('autoTranslate: MutationObserver falhou:', e);
  }

  // 3) fallback secundário: intervalo mais longo para reaplicar (até X segundos)
  var totalSeconds = 0;
  var longInterval = setInterval(function () {
    totalSeconds += 1;
    if (applySelect() || totalSeconds > 20) {
      clearInterval(longInterval);
      // se conseguir aplicar, podemos desconectar o observer se quisermos
      try { observer.disconnect(); } catch (e) {}
    }
  }, 1000);

  // 4) se tudo falhar e detectarmos que o select está em iframe cross-origin,
  //    recomende recarregar como último recurso (não forçamos aqui — só log)
  setTimeout(function () {
    // checar presença de select no documento principal; se não houver e houver iframe do GTranslate, avisar
    var foundSelect = !!document.querySelector('.gtranslate_wrapper select, .goog-te-combo, select[id^="goog-translate"]');
    var hasIframe = !!document.querySelector('iframe[src*="translate"], iframe[id^="goog"], iframe.goog-te-banner-frame');
    if (!foundSelect && hasIframe) {
      console.warn('autoTranslate: widget parece estar em iframe externo (cross-origin). Neste caso não é possível alterar o select via JS. Use cookie+reload se necessário.');
      // se quiser, aqui você pode forçar reload (descomentando):
      window.location.href = window.location.protocol + '//' + window.location.host + (window.location.pathname || '');
    }
  }, 3000);
});