import { useEffect } from "react";
import { setUp } from "../../../../js/jogos/caca-palavras/setup";
function Main() {
    useEffect(() => {
        setUp();
    });
    return (
        <main className="game-container col-md-10 notranslate" translate="no">
            <div className="sidebar col-md-6">
                <h2>Palavras para Encontrar</h2>
                <ul id="word-list">
                    {/*!-- A lista de palavras será inserida aqui --*/}
                </ul>
                <button id="restart-button">Recomeçar</button>
            </div>
            <div id="word-search-grid" className="grid-container col-md-6">
                {/*!-- As letras serão inseridas aqui via JavaScript --*/}
            </div>
        </main>
    )
}
export default Main;