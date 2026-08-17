import { useEffect, useState } from "react";
import { API_URL } from "../../App";
import dados from "../../js/jogos.json";

function ListaJogos() {
    let gameItems = [];
    const [jogos, setJogos] = useState([]);

    useEffect(() => {
        async function carregar() {
            setJogos(dados);
        }
        carregar();
    }, [])
    if (!jogos || (jogos && !jogos.length)) {
        return;
    }
    return (jogos.map((game, index) => {
        gameItems.push(game);
        return <div
            key={index}
            className='game-card'
            style={{
                height: 'stretch',
                background: `url(${API_URL + game.imagem})`,
                backgroundSize: 'cover'
            }}>
            <button
                data-game-url={game.url}
                data-game-title={game.titulo}
                data-game-desc={game.descricao}
                data-game-imagem={game.imagem}
                onClick={
                    function () {
                        setTimeout(() => {
                            window.open(game.url);
                        }, 200);
                    }
                }>
                <div className="row min-vh-50 h-100 align-content-center">
                    <h2 className="rounded-left bg-dark my-0 py-1 rounded">
                        {game.titulo}
                    </h2>
                </div>
            </button>
        </div>
    }))
}

export default ListaJogos;