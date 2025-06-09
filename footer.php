<footer class="mt-2" style="display: flex; justify-content: center; flex-direction: column; text-align: center; color: white; padding: 24px; background-image: linear-gradient(transparent,#000000);">
    <div style="margin: 0 auto; width: 100%">
        <script type="text/javascript">
            atOptions = {
                'key' : '36908cd1702faba6c183fb82dc5a6c78',
                'format' : 'iframe',
                'height' : 60,
                'width' : 468,
                'params' : {}
            };
        </script>
        <script type="text/javascript" src="//www.highperformanceformat.com/36908cd1702faba6c183fb82dc5a6c78/invoke.js"></script>
    </div>
    <a href="/"><span style="font-family: Montserrat">Oliv3r Dev</span></a>
    <span style="font-size: 9px">Todos os direitos reservados - Oliv3r Dev -  2025</span>
    <a href="/politica-de-privacidade.html">Política de Privacidade</a>
    <span style="font-size: 9px">CNPJ 60.407.027/0001-25</span>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
    $(window).on('load', () => {
        const checkIframe = setInterval(() => {
            const doc = document.querySelector('iframe');
            if (doc) {
                clearInterval(checkIframe); // para a verificação
                console.log('iframe encontrado:', doc);
                // Agora você pode usar iframe.contentWindow / contentDocument, etc.
                doc.width = "100%";
                doc.height = "";
                const docContent = doc.contentDocument; 
                const styleDoc = docContent.createElement("style");
                styleDoc.textContent = `
                div {
                    text-align: center;
                    width: 100%;
                }
                img {
                    width: 100%;
                    height: auto;
                }`;
                docContent.head.appendChild(styleDoc);
            }
            }, 100);
        });
</script>

<?php include('politica-de-privacidade.php'); ?>
<script>
    if(localStorage.getItem('cookieConsent')) {
        const scriptAds = document.createElement('script');
        scriptAds.src = "https://fpyf8.com/88/tag.min.js";
        scriptAds.dataset.zone = "149213"
        scriptAds.async = "true"; 
        scriptAds.dataset.cfasync = "false";
        document.querySelector("head").appendChild(scriptAds);
    }
</script>