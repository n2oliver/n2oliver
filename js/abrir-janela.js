function abrirJanela(url,offWindowUrl,parameters={}) {
  window.open(
    url, // URL
    '_blank',         // nome da janela
    !parameters.showMenu ? 'width='+screen.availWidth + ',height=' + screen.availHeight + ',resizable=yes,scrollbars=yes'+',noopener,noreferrer,location=no,status=no' : null
  );
  
  if(offWindowUrl) {
    window.location.href=offWindowUrl;
  }
}