import { $, API_URL } from "../App";

function scroll(element) {
    element.scrollIntoView({
        behavior: "smooth",
        block: "start"
    })
}

function showGameInHighlight(game) {
    if(!game) {
        return;
    }
    let destaqueImagem = document.querySelector("body");
    let thumbnail = document.getElementById("thumbnail");
    if(destaqueImagem) {
        destaqueImagem.style.backgroundImage = 'url(' + API_URL + game.imagem + ')';
    }
    if(thumbnail) {
        thumbnail.style.backgroundImage = 'url(' + API_URL + game.imagem + ')';
    }
    $('#game-details-content,#game-details-title,#play-button,#click-to-action').unbind('click').click(function (e) {
        e.preventDefault();
        setTimeout(() => {
            window.location.href = game.url;
        }, 200);
    });


    const detailsTitle = document.getElementById('game-details-title');
    if(detailsTitle) {
        detailsTitle.textContent = game.titulo;
    }
    const detailsContent = document.getElementById('game-details-content');
    if(detailsContent) {
        detailsContent.innerHTML = game.descricao +
            `<div class="text-center">
                <button onclick="window.location.href = '${game.url}'" class="btn btn-lg btn-danger m-1 h-0 text-nowrap" id="play-button" aria-label="Aria Right">
                    Jogar
                </button>
            </div>`;
    }
}

export { scroll, showGameInHighlight }