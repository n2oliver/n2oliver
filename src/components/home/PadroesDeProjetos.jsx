import { useEffect, useState } from "react";
import { API_URL } from "../../App";
import dados from "../../js/padroes.json";

function PadroesDeProjetos() {
    let patternItems = [];
    const [padroes, setPadroes] = useState({});

    useEffect(() => {
        async function carregar() {
            setPadroes(dados);
        }
        carregar();
    }, {})
    if (!padroes || (padroes && !Object.entries(padroes).length)) {
        return;
    }
    return (
        <div class="flex-column">
            <h2 class="bg-dark">Criacionais</h2>
            <div class="row">
                {padroes.criacional.map((padrao, index) => {
                    patternItems.push(padrao);
                    return <div
                        key={index}
                        className='game-card'
                        style={{
                            height: 'stretch',
                            background: `url(${API_URL + padrao.imagem})`,
                            backgroundSize: 'cover'
                        }}>
                        <button
                            data-game-url={padrao.url}
                            data-game-title={padrao.titulo}
                            data-game-desc={padrao.descricao}
                            data-game-imagem={padrao.imagem}
                            onClick={
                                function () {
                                    setTimeout(() => {
                                        window.open(padrao.url);
                                    }, 200);
                                }
                            }>
                            <div className="row min-vh-50 h-100 align-content-center">
                                <h2 className="rounded-left bg-dark my-0 py-1 rounded">
                                    {padrao.titulo}
                                </h2>
                            </div>
                        </button>
                    </div>;
                })}
            </div>
        </div>
    );
}

export default PadroesDeProjetos;