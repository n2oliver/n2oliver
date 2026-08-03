import { useEffect } from "react";
import { setUp } from "../../../../js/jogos/palavras-cruzadas/setup";
function Main() {
    useEffect(() => {
        setUp();
    });
    return (
        <main className="game-container notranslate" translate="no">
            <div id="crossword-grid" className="grid-container">
                {/*!-- A grade será gerada aqui via JS --*/}
            </div>
            <div className="clues-container">
                <div className="clues">
                    <h2>Horizontais</h2>
                    <ul id="clues-across"></ul>
                </div>
                <div className="clues">
                    <h2>Verticais</h2>
                    <ul id="clues-down"></ul>
                </div>
            </div>
        </main>
    )
}
export default Main;