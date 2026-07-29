import { showGameInHighlight } from "../js/feed.js";
import { useEffect, useState } from 'react';
import Progressbar, { setProgress } from './Progressbar.js';
import { API_URL } from "../App.js";

let gameItemsIndex = -1;
let gamesArray = [];

function DestaqueImagem() {
    const [gameItems, setGameItems] = useState([])
    useEffect(() => {
        async function carregar() {
            const response = await fetch(`${API_URL}/api/jogos/obter.php`);
            const dados = await response.json();
            setGameItems(dados);
            gamesArray = dados;
            console.log(atob(gameItems.toString()));
        }

        carregar();
    }, []);
    return (
        <section id="destaque-imagem" className="m-auto m-auto n2oliver-jogos d-flex flex-column justify-content-center"
            alt="">
            <div id="games" className="container m-auto p-0">
                <div id="game-details" className="flex-row px-0 col-md-10">
                    <div className="m-auto">
                        <h2><strong><span id="game-details-title">n2oliver</span></strong>🎮</h2>
                        <div id="thumbnail" className="m-auto rounded align-content-end border border-light">
                            <div id="game-details-panel" className="d-flex justify-content-around">
                                <div className="col-md-10 m-auto">
                                    <button className="btn btn-lg btn-success m-1 h-0 rounded-circle"
                                        id="prev" aria-label="Aria Left"
                                        onClick={prev}>
                                        <i className="fa-solid fa-arrow-left"></i>
                                    </button>
                                    <button className="btn btn-lg btn-success m-1 h-0 rounded-circle"
                                        id="next" aria-label="Aria Right"
                                        onClick={next}>
                                        <i className="fa-solid fa-arrow-right"></i>
                                    </button>
                                    <div id="game-details-content" className="p-2 d-flex">
                                        Carregando...
                                        <div className="text-center">
                                            <button className="btn btn-lg btn-danger m-1 h-0 text-nowrap" id="play-button" aria-label="Aria Right">
                                                Jogar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="click-to-action"></div>
                        </div>

                        <Progressbar />
                    </div>
                </div>
            </div>
        </section>
    )
}
function next() {
    gameItemsIndex++;
    if (gameItemsIndex >= gamesArray.length) {
        gameItemsIndex = 0;
    }
    showGameInHighlight(gamesArray[gameItemsIndex]);
    setProgress(0);
}

function prev() {
    gameItemsIndex--;
    if (gameItemsIndex < 0) {
        gameItemsIndex = gamesArray.length - 1;
    }
    showGameInHighlight(gamesArray[gameItemsIndex]);
    setProgress(0);
}
export default DestaqueImagem;
export { next, gamesArray }