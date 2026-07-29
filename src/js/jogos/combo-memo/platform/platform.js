import { esconderCarta, esconderTodasAsCartas, virarCarta } from "../../../../js/jogos/combo-memo/card/card";
import { comemoracoes, comemoracoesFinais, comemorar } from "../../../../js/jogos/combo-memo/great/congratulations";

let counter = 0;
let acertos = 0;
let acerto = 0;
let erros = 0;
let ultimaCarta;
let percentual = 0;
function handleCardClick(event) {
    const highScore = document.getElementById("high-score");
    const card = event.currentTarget;

    counter++;

    if (counter > 2) {
        counter = 0;
        esconderTodasAsCartas();
        return;
    }

    if (card.classList.contains("inverter")) {
        if (event.target.dataset.oculto === "false") {
            event.target.dataset.oculto = "true";
            esconderCarta(event.target);
        }
        return;
    }

    if (event.target.dataset.acertou === "true") {
        return;
    }

    if (event.target.classList.contains("sem-fundo")) {
        event.target.dataset.oculto = "false";
        virarCarta(event.target);

        if (counter === 1) {
            ultimaCarta = event.target;
        }

        if (
            counter === 2 &&
            ultimaCarta &&
            ultimaCarta.style.backgroundImage === event.target.style.backgroundImage
        ) {
            acertos++;
            acerto = (acertos / (erros + acertos) * 100).toFixed(2);

            const acertoDiv = document.getElementById("acerto");
            if (acertoDiv) {
                acertoDiv.innerText = acerto;
            }

            event.target.dataset.acertou = "true";
            ultimaCarta.dataset.acertou = "true";

            const comemoracao = comemoracoes.sort(() => Math.random() - 0.5);
            comemorar(comemoracao[0]);

            if (document.querySelectorAll("[data-acertou=true]").length === 16) {
                const comemoracaoFinal = comemoracoesFinais.sort(() => Math.random() - 0.5);

                percentual = (acertos / (erros + acertos) * 100).toFixed(2);

                if (
                    !localStorage.combo_memo_high_score ||
                    percentual > localStorage.combo_memo_high_score
                ) {
                    localStorage.setItem("combo_memo_high_score", percentual);

                    if (highScore) {
                        highScore.innerText = percentual;
                    }
                }

                setTimeout(() => {
                    comemorar(comemoracaoFinal[0]);

                    setTimeout(() => {
                        comemorar("Sua pontuação final foi de " + percentual + "%");
                    }, 5000);
                }, 5000);
            }
        } else if (counter === 2) {
            erros++;

            const errorsDiv = document.getElementById("erros");
            if (errorsDiv) {
                errorsDiv.innerText = erros;
            }
        }
    }
}
function setUltimaCarta(value) {
    ultimaCarta = value;
}

export { ultimaCarta, handleCardClick, percentual, setUltimaCarta };