<link rel="stylesheet" href="/css/footer.css">
<footer class="site-footer mt-2 m-auto">
  <a href="/"><span class="oliver-dev-logo footer-logo">n2oliver</span></a>
  <span class="footer-text-small">Todos os direitos reservados - n2oliver - 2024</span>
  <a href="/politica-de-privacidade.html">Política de Privacidade</a>
  <a href="/contato.php">Contato</a>
  <span><a href="mailto:suporte@n2oliver.com">suporte@n2oliver.com</a></span>
  <span class="footer-text-small">CNPJ 60.407.027/0001-25</span>
</footer>
<script type="text/javascript" src="/lib/tarteaucitron/tarteaucitron.js"></script>
<script type="text/javascript">
  tarteaucitron.init({
    "privacyUrl": "/politica-de-privacidade.html",
    /* Privacy policy url */
    "bodyPosition": "top",
    /* top to bring it as first element for accessibility */

    "hashtag": "#tarteaucitron",
    /* Open the panel with this hashtag */
    "cookieName": "tarteaucitron",
    /* Cookie name */

    "orientation": "middle",
    /* Banner position (top - bottom) */

    "groupServices": true,
    /* Group services by category */
    "showDetailsOnClick": true,
    /* Click to expand the description */
    "serviceDefaultState": "wait",
    /* Default state (true - wait - false) */

    "showAlertSmall": false,
    /* Show the small banner on bottom right */
    "cookieslist": false,
    /* Show the cookie list */

    "closePopup": true,
    /* Show a close X on the banner */

    "showIcon": true,
    /* Show cookie icon to manage cookies */
    //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
    "iconPosition": "BottomRight",
    /* Position of the cookie (BottomRight - BottomLeft - TopRight - TopLeft) */

    "adblocker": false,
    /* Show a Warning if an adblocker is detected */

    "DenyAllCta": true,
    /* Show the deny all button */
    "AcceptAllCta": true,
    /* Show the accept all button */
    "highPrivacy": true,
    /* HIGHLY RECOMMANDED Disable auto consent */
    "alwaysNeedConsent": false,
    /* Ask the consent for "Privacy by design" services */

    "handleBrowserDNTRequest": false,
    /* If Do Not Track == 1, disallow all */

    "removeCredit": false,
    /* Remove credit link */
    "moreInfoLink": true,
    /* Show more info link */

    "useExternalCss": false,
    /* Expert mode: do not load the tarteaucitron.css file */
    "useExternalJs": false,
    /* Expert mode: do not load the tarteaucitron js files */

    //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */

    "readmoreLink": "/politica-de-privacidade.html",
    /* Change the default readmore link */

    "mandatory": true,
    /* Show a message about mandatory cookies */
    "mandatoryCta": false,
    /* Show the disabled accept button when mandatory on */

    //"customCloserId": "", /* Optional a11y: Custom element ID used to open the panel */

    "googleConsentMode": true,
    /* Enable Google Consent Mode v2 for Google ads & GA4 */
    "bingConsentMode": true,
    /* Enable Bing Consent Mode for Clarity & Bing Ads */
    "softConsentMode": false,
    /* Soft consent mode (consent is required to load the services) */

    "dataLayer": false,
    /* Send an event to dataLayer with the services status */
    "serverSide": false,
    /* Server side only, tags are not loaded client side */

    "partnersList": true, /* Show the number of partners on the popup/middle banner */
    "timeout": 0, // Previne que o pop-up seja exibido automaticamente
    "force": false // Desativa a exibição forçada do pop-up
  });
  (tarteaucitron.job = tarteaucitron.job || []).push('gcmadstorage');
  document.addEventListener("allRequestsFinished", () => {
    document.querySelector('body').classList.remove('loading');
    document.querySelector('.loader').classList.add('d-none');
  });
  (function() {
  let pendingRequests = 0;

  function checkDone() {
    if (pendingRequests === 0) {
      document.dispatchEvent(new Event("allRequestsFinished"));
    }
  }

  const originalFetch = window.fetch;
  window.fetch = function(...args) {
    pendingRequests++;
    return originalFetch(...args).finally(() => {
      pendingRequests--;
      checkDone();
    });
  };
})();

</script>
<div class="gtranslate_wrapper"></div>
<script>
window.gtranslateSettings = {"default_language":"pt","native_language_names":true,"languages":["pt","fr","it","es","en","zh-TW","zh-CN","nl"],"wrapper_selector":".gtranslate_wrapper"}

</script>
<script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>
<script>
</script>
    <style>
      .gtranslate_wrapper,
      .tarteaucitronIconBottomRight,
      #tarteaucitronAlertBig {
        z-index: 9999 !important;
      }
    </style>
</div>