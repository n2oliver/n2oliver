import { useEffect, useState } from "react";
import { Link } from 'react-router-dom';
import { API_URL } from "../../App";

function DestaquesCards() {
    const [destaques, setDestaques] = useState([]);

    useEffect(() => {
        async function carregar() {
            const response = await fetch(`${API_URL}/api/destaques/obter.php`);
            const dados = await response.json();
            setDestaques(dados);
        }

        carregar();
    }, []);
    if (!destaques.map) {
        return "";
    }
    return (
        destaques.map((destaque, index) => (
            <div
                className="game-card"
                key={index}
                style={{
                    height: "stretch",
                    background: `url(${API_URL + destaque.imagem}) 0% 0%`,
                    backgroundSize: 'cover',
                    backgroundPosition: 'center'
                }}>
                <Link to={destaque.url} target="_blank" role="button">
                    <button
                        data-game-url={destaque.url}
                        data-game-title={destaque.titulo}
                        data-game-desc={destaque.descricao}
                        data-game-imagem={`${API_URL + destaque.imagem}`}>
                        <div className="row min-vh-50 h-100 align-content-center">
                            <h2 className="rounded-left bg-dark my-0 py-1 rounded">{destaque.titulo}</h2>
                        </div>
                    </button>
                </Link>
            </div>
        ))
    );
}

export default DestaquesCards;