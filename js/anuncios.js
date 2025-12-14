document.addEventListener('DOMContentLoaded', () => {

    const adUrl = 'https://laxativethem.com/ffga4c7z4?key=9b0193dfd0a136a88071da78968c41eb';

    // 1) Teste de popup bloqueado ANTES de chamar abrirJanela()
    let popup = window.open(adUrl, '_blank');
    setTimeout(() => {
        if (!popup) {
            let contador = 10;
            const intervalo = setInterval(() => {
                if (contador > 0) {
                    contador -= 1;
                }
                const tempoContador = document.getElementById('tempo');
                if (contador <= 5) {
                    tempoContador.style.color = 'red';
                }
                tempoContador.textContent = contador;
            }, 1000);

            const timeout = setTimeout(() => {
                gtag("event", "close_convert_lead", {
                    currency: "USD",
                    value: 0.0004
                });
                window.location.href = adUrl;
            }, 10000);

            $("#aviso").show();
            $("#cancelar").click(() => {
                gtag("event", "close_convert_lead", {
                    currency: "USD",
                    value: 0.0004
                });
                window.location.href = adUrl;
            });
            $("#ok").click(() => {
                gtag("event", "close_convert_lead", {
                    currency: "USD",
                    value: 0.0004
                });
                window.open(adUrl, '_blank');
                clearInterval(intervalo);
                clearTimeout(timeout);
                $("#aviso").hide();
            });
        } else {
            gtag("event", "close_convert_lead", {
                currency: "USD",
                value: 0.0004
            });
        }

        let permitido = false;

        document.addEventListener("click", () => {
            permitido = true;
        });

        function abrirPopupUmaVez(url = adUrl) {
            if (!permitido) return;
            if (sessionStorage.getItem("popup_abriu")) {
                document.removeEventListener("mouseleave", (e) => {
                    if (e.clientY <= 0 && !sessionStorage.getItem("popup_abriu")) {
                        gtag("event", "close_convert_lead", {
                            currency: "USD",
                            value: 0.0004
                        });
                        abrirPopupUmaVez();
                    }
                });
                return;
            }

            gtag("event", "close_convert_lead", {
                currency: "USD",
                value: 0.0004
            });
            window.open(url, "_blank");

            sessionStorage.setItem("popup_abriu", "1"); // marca como aberto
            permitido = false;
        }

        document.addEventListener("mouseleave", (e) => {
            if (e.clientY <= 0 && !sessionStorage.getItem("popup_abriu")) {
                gtag("event", "close_convert_lead", {
                    currency: "USD",
                    value: 0.0004
                });
                abrirPopupUmaVez();
            }
        });

        document.addEventListener("visibilitychange", () => {
            if (document.visibilityState === "hidden" && !sessionStorage.getItem("popup_abriu")) {
                abrirPopupUmaVez();
            }
        });
    });
})