const SMARTLINK_1 = 'https://laxativethem.com/vs23jmys5q?key=7c2ccbc5de27850e97ac9aae68ac23a4';
const SMARTLINK_2 = 'https://directads.adclickppc.com/dl/?16925b62-e818-4353-8bb6-0fe491d50746';
const SMARTLINK_3 = 'https://otieu.com/4/10285691';
const params1 = 'width='+ ((screen.availWidth / 2).toFixed(0)) + ',height=' + ((screen.availHeight / 2).toFixed(0)) + ',resizable=yes,scrollbars=yes';
const params2 = 'width='+ ((screen.availWidth / 3).toFixed(0)) + ',height=' + ((screen.availHeight / 3).toFixed(0)) + ',resizable=yes,scrollbars=yes';
const params3 = 'width='+ ((screen.availWidth / 2.5).toFixed(0)) + ',height=' + ((screen.availHeight / 3).toFixed(0)) + ',resizable=yes,scrollbars=yes';

let anuncioAbriu;
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
  window.open(SMARTLINK_1, '_blank', params1);
  setTimeout(()=>{
    window.open(SMARTLINK_2, '_blank', params2);
    setTimeout(()=>{
      window.open(SMARTLINK_3, '_blank', params3);
    }, 200);
  }, 200);

  sessionStorage.setItem('smartlink_aberto', '1');
}