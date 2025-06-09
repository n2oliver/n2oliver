<div id="cookie-banner" style="
  position: fixed !important;
  bottom: 20px !important;
  left: 20px !important;
  right: 20px !important;
  background: #f1f1f1 !important;
  padding: 15px !important;
  border-radius: 8px !important;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2) !important;
  font-family: Arial, sans-serif !important;
  font-size: 14px !important;
  z-index: 9999 !important;
  display: none !important;
">
  <p style="margin: 0; padding-right: 80px;">
    Este site exibe anúncios que podem utilizar cookies para personalização. Ao continuar, você concorda com nossa 
    <a href="/politica-de-privacidade.html" target="_blank" style="color: #0066cc;">Política de Privacidade</a>.
  </p>
  <button id="cookie-ok" style="
    position: absolute;
    right: 30px;
    top: 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
  ">OK</button>
</div>

<script>
  // Verifica se o aviso já foi aceito
  if (!localStorage.getItem('cookieConsent')) {
    document.getElementById('cookie-banner').style.display = 'block';
  }

  // Ao clicar em OK, oculta o banner e salva a aceitação
  document.getElementById('cookie-ok').addEventListener('click', function () {
    localStorage.setItem('cookieConsent', 'true');
    document.getElementById('cookie-banner').style.display = 'none';
  });
</script>