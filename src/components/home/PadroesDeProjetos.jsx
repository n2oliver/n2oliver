import { useEffect, useState } from "react";
import { API_URL } from "../../App";
import dados from "../../js/padroes.json";
import Accordion from 'react-bootstrap/Accordion';
import YoutubePlayer from "../YoutubePlayer";

function PadroesDeProjetos() {
    const [padroes, setPadroes] = useState({});
    const [show, setShow] = useState(false);
    const [video, setVideo] = useState({});

    const handleClose = () => {
        setShow(false);
    }
    const handleShow = (video) => {
        setVideo(video);
        setShow(true);
    }

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
        <>
            <strong>
                <h2 className="my-0">Padrões de Projeto GoF (Gang of Four)</h2>
            </strong>
            <Accordion defaultActiveKey="0" flush data-bs-theme="dark">
                <Accordion.Item eventKey="0">
                    <Accordion.Header><h2>Criacionais</h2></Accordion.Header>
                    <Accordion.Body>
                        <div class="row justify-content-start">
                            {padroes.criacional.map((padrao, index) => {
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
                                            () => padrao.youtube ? handleShow(padrao) : (function (padrao) {
                                                setTimeout(() => {
                                                    window.open(padrao.url);
                                                }, 200);
                                            })(padrao)
                                        }>
                                        <div className="row min-vh-50 align-content-center">
                                            <h2 className="rounded-left bg-dark my-0 py-1 rounded">
                                                {padrao.titulo}
                                            </h2>
                                            <p style={{ fontSize: ".7em", background: "rgba(0,0,0,.7)" }}>{padrao.descricao}</p>
                                            <small className="small" style={{ fontSize: ".64em", background: "rgba(0,0,0,.7)" }}>{padrao.resumo}</small>
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
                                            () => padrao.youtube ? handleShow(padrao) : (function (padrao) {
                                                setTimeout(() => {
                                                    window.open(padrao.url);
                                                }, 200);
                                            })(padrao)
                                        }>
                                        <div className="row min-vh-50 align-content-center">
                                            <h2 className="rounded-left bg-dark my-0 py-1 rounded">
                                                {padrao.titulo}
                                            </h2>
                                            <p style={{ fontSize: ".7em", background: "rgba(0,0,0,.7)" }}>{padrao.descricao}</p>
                                            <small className="small" style={{ fontSize: ".64em", background: "rgba(0,0,0,.7)" }}>{padrao.resumo}</small>
                                        </div>
                                    </button>
                                </div>;
                            })}
                        </div>
                    </Accordion.Body>
                </Accordion.Item>
            </Accordion>
            <YoutubePlayer video={video} show={show} handleClose={handleClose}/>
        </>
    );
}

export default PadroesDeProjetos;