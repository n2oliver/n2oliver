function abrirJanela(url,offWindowUrl) {
  window.open(
    url, // URL
    '_blank',         // nome da janela
    'width='+screen.availWidth + ',height=' + screen.availHeight + ',menubar=no,toolbar=no,location=no,status=no,resizable=yes,scrollbars=yes'
  );
  
  if(offWindowUrl) {
    window.location.href=offWindowUrl;
  }
}