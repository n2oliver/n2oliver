import { useEffect, useState } from "react";
import { API_URL } from "../../App";
import dados from "../../js/padroes.json";
import Accordion from 'react-bootstrap/Accordion';

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
        <Accordion defaultActiveKey="0" flush data-bs-theme="dark">
            <Accordion.Item eventKey="0">
                <Accordion.Header><h2>Criacionais</h2></Accordion.Header>
                <Accordion.Body>
                    <div class="row justify-content-start">
                        {padroes.criacional.map((padrao, index) => {
                            patternItems.push(padrao);
                            return <div
                                key={index}
                                className='game-card'
                                style={{
                                    background: `url(${API_URL + padrao.imagem})`
                                }}>
                                <button
                                    data-game-url={padrao.url}
                                    data-game-youtube={padrao.youtube}
                                    data-game-tiktok={padrao.tiktok}
                                    data-game-title={padrao.titulo}
                                    data-game-desc={padrao.descricao}
                                    data-game-imagem={padrao.imagem}
                                    onClick={
                                        function () {
                                            setTimeout(() => {
                                                window.open(padrao.youtube || padrao.url);
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
                </Accordion.Body>
            </Accordion.Item>
            <Accordion.Item eventKey="1">
                <Accordion.Header><h2>Em breve...</h2></Accordion.Header>
                <Accordion.Body>
                    <div class="row justify-content-start ">
                        {padroes.em_breve.map((padrao, index) => {
                            patternItems.push(padrao);
                            return <div
                                key={index}
                                className='game-card'
                                style={{
                                    background: padrao.imagem ? `url(${API_URL + padrao.imagem})` : ""
                                }}>
                                <button
                                    data-game-url={padrao.url}
                                    data-game-youtube={padrao.youtube}
                                    data-game-tiktok={padrao.tiktok}
                                    data-game-title={padrao.titulo}
                                    data-game-desc={padrao.descricao}
                                    data-game-imagem={padrao.imagem}
                                    onClick={
                                        function () {
                                            setTimeout(() => {
                                                window.open(padrao.youtube || padrao.url);
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
                </Accordion.Body>
            </Accordion.Item>
        </Accordion>
    );
}

export default PadroesDeProjetos;