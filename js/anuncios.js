const SMARTLINK_1 = 'https://laxativethem.com/c3vcjhu7x?key=791e383fa6c2cf2f88b6b88d66f02cc2';
const SMARTLINK_2 = 'https://otieu.com/4/10285691';
const SMARTLINK_3 = 'https://directads.adclickppc.com/dl/?16925b62-e818-4353-8bb6-0fe491d50746';
const params1 = 'width='+ ((screen.availWidth / 2).toFixed(0)) + ',height=' + ((screen.availHeight / 2).toFixed(0)) + ',resizable=yes,scrollbars=yes';
const params2 = 'width='+ ((screen.availWidth / 3).toFixed(0)) + ',height=' + ((screen.availHeight / 3).toFixed(0)) + ',resizable=yes,scrollbars=yes';
const params3 = 'width='+ ((screen.availWidth / 2.5).toFixed(0)) + ',height=' + ((screen.availHeight / 3).toFixed(0)) + ',resizable=yes,scrollbars=yes';

let anuncioAbriu;
function abrirSmartlinkUmaVez() {
  if (sessionStorage.getItem('smartlink_aberto')) {
    if(sessionStorage.getItem('smartlink_aberto_2')) {
      setTimeout(()=>{
        window.open(SMARTLINK_3, '_blank', params3);
      }, 200);
      return;  
    }
    setTimeout(()=>{
      window.open(SMARTLINK_2, '_blank', params2);
    }, 200);
    
    sessionStorage.setItem('smartlink_aberto_2', '1');
    return;
  }

  // Evento GA (opcional, mantido)
  if (typeof gtag === 'function') {
    gtag('event', 'smartlink_open', {
      currency: 'USD',
      value: 0.0004
    });
  }

  // Abre smartlink principal
  window.open(SMARTLINK_1, '_blank', params1);
  sessionStorage.setItem('smartlink_aberto', '1');
}