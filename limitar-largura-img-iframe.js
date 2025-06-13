
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