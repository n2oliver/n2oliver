import { gtag } from "./gtag"
const SMARTLINK_1 = 'https://laxativethem.com/ffga4c7z4?key=9b0193dfd0a136a88071da78968c41eb';
const params1 = 'width='+ ((screen.availWidth / 2).toFixed(0)) + ',height=' + ((screen.availHeight / 2).toFixed(0)) + ',resizable=yes,scrollbars=yes';

let anuncioAbriu;
function abrirSmartlinkUmaVez() {
  if (sessionStorage.getItem('smartlink_aberto')) {
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
export { abrirSmartlinkUmaVez, SMARTLINK_1, params1 };