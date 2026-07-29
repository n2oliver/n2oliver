import { useEffect } from "react";
import { abrirSmartlinkUmaVez, params2, SMARTLINK_2 } from "../../../js/anuncios";
import { setUp } from "../../../js/jogos/caixa-de-letras/setup";

function GameContainer() {
    useEffect(() => {
        const gridEl = document.getElementById('grid');
        gridEl.style.gridTemplateColumns = 'repeat(5, 1fr)';
        gridEl.style.gridTemplateRows = 'repeat(5, 1fr)';
        setUp();
    });
    return (
        <div className="game-container">
            <div className="game-title text-dark bg-warning m-auto"><strong>Caixa de Letras</strong></div>
            <div className="instructions"><strong>Arraste ou clique para mover as letras. Encontre palavras comuns do português brasileiro!</strong>
                <div className="botoes text-center">
                    <button id="btnRestart" className="btn btn-warning" onClick={(event) => {
                        event.preventDefault();
                        abrirSmartlinkUmaVez();
                        setTimeout(() => {
                            window.open(SMARTLINK_2, '_blank', params2);
                            setTimeout(() => {
                                window.location.reload();
                            }, 1200);
                        }, 600);
                    }}><strong id="reiniciar">Carregando...</strong><i className="fas fa-spinner fa-spin"></i></button>
                </div>
            </div>

            <div id="word" className="word notranslate" translate="no"></div>
            <div id="grid" className="grid notranslate" translate="no" style={{ gridTemplateColumns: "repeat(8, 1fr)", gridTemplateRows: "repeat(3, 1fr)" }}></div>
        </div>
    )
}
export default GameContainer;