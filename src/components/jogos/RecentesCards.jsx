import { useEffect, useState } from "react";
import { showGameInHighlight } from "../../js/feed";
import { API_URL } from "../../App";
import dados from "../../js/jogos.json";

function RecentesCards() {
    const [recentes, setRecentes] = useState([]);

    useEffect(() => {
        async function carregar() {
            setRecentes(dados);
        }

        carregar();
    }, []);
    if (!recentes.map) {
        return "";
    }
    recentes.length && showGameInHighlight(recentes[0]);
    return (
        recentes.map((recente, index) => (
            <div className="game-card" key={index}
                style={{
                    height: "stretch",
                    background: `url(${API_URL + recente.imagem}) 0% 0%`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center'
                }}>
                <button
                    data-game-url={recente.url}
                    data-game-title={recente.titulo}
                    data-game-desc={recente.descricao}
                    data-game-imagem={`${API_URL + recente.imagem}`}
                    onClick={(event) => window.open(recente.url)}>
                    <div className="row min-vh-50 h-100 align-content-center">
                        <h2 className="rounded-left bg-dark my-0 py-1 rounded">{recente.titulo}</h2>
                    </div>
                </button>
            </div>
        ))
    );
}

export default RecentesCards;