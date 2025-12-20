const SMARTLINK_1 = 'https://laxativethem.com/vs23jmys5q?key=7c2ccbc5de27850e97ac9aae68ac23a4';
const SMARTLINK_2 = 'https://directads.adclickppc.com/dl/?16925b62-e818-4353-8bb6-0fe491d50746';

document.addEventListener('DOMContentLoaded', () => {

  
  function abrirSmartlinkUmaVez() {
    if (sessionStorage.getItem('smartlink_aberto')) return;

    // Evento GA (opcional, mantido)
    if (typeof gtag === 'function') {
      gtag('event', 'smartlink_open', {
        currency: 'USD',
        value: 0.0004
      });
    }

    // Abre smartlink principal
    window.open(SMARTLINK_1, '_blank');

    // Se veio do PopAds, abre o segundo link
    if (location.search.toLowerCase().includes('utm_source=popads')) {
      window.open(SMARTLINK_2, '_blank');
    }

    sessionStorage.setItem('smartlink_aberto', '1');
  }

  // Primeira interação do usuário dispara o smartlink
  document.addEventListener('click', abrirSmartlinkUmaVez, { once: true });

  function esconderAutomaticamente() {

    setTimeout(() => {
      $('#ads').slideUp("slow", ()=>{
        $(this).hide();
        $('#botao-anuncios').unbind('click').on('click', ()=>{
          $('#ads').slideDown("slow", ()=>{
            $(this).show();
            esconderAutomaticamente();
          });
        });
      });
    }, 15000); 
  }
  esconderAutomaticamente();
});
