import { useEffect, useRef, useState } from "react";
import { API_URL } from "../../App";
import dados from "../../js/padroes.json";
import Accordion from 'react-bootstrap/Accordion';
import YoutubePlayer from "../YoutubePlayer";

function PadroesDeProjetos() {
    const [padroes, setPadroes] = useState({});
    const [show, setShow] = useState(false);
    const [video, setVideo] = useState({});
    const [activeKey, setActiveKey] = useState(null);

    const isDown = useRef(false);
    const startX = useRef(0);
    const scrollLeft = useRef(0);
    const arrastou = useRef(false);

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
        
        setTimeout(() => {
            setActiveKey('0');
        }, 10);
        carregar();
    }, {})
    if (!padroes || (padroes && !Object.entries(padroes).length)) {
        return;
    }
    function startDragEvent(e) {
        isDown.current = true;
        arrastou.current = false;

        e.currentTarget.classList.add('active');

        startX.current = e.pageX - e.currentTarget.offsetLeft;
        scrollLeft.current = e.currentTarget.scrollLeft;
    }

    function mouseLeave() {
        isDown.current = false;
    }

    function mouseUp() {
        isDown.current = false;
    }

    function dragEvent(e) {
        if (!isDown.current) return;

        const container = e.currentTarget;
        const x = e.pageX - container.offsetLeft;
        const walk = x - startX.current;

        // Só considera arraste depois de um deslocamento mínimo
        if (Math.abs(walk) > 5) {
            arrastou.current = true;
        }

        if (arrastou.current) {
            e.preventDefault();
            container.scrollLeft = scrollLeft.current - walk;
        }
    }
    function openWindow(padrao) {
        setTimeout(() => {
            window.open(padrao.url);
        }, 200);
    }
    return (
        <>
            <strong>
                <h4 className="my-0 pb-2 pt-2 text-start">Padrões de Projeto</h4>
            </strong>
            <Accordion activeKey={activeKey} onSelect={(eventKey) => setActiveKey(eventKey)} flush data-bs-theme="dark">
                <Accordion.Item eventKey="0">
                    <Accordion.Header><h2>Criacionais</h2></Accordion.Header>
                    <Accordion.Body className="scroll-container"
                        onMouseDown={(event) => startDragEvent(event)} onMouseLeave={mouseLeave} onMouseUp={mouseUp}
                        onMouseMove={dragEvent}>
                        <div class="d-inline-flex w-100 justify-content-start scroll-content">
                            {padroes.Criacionais.map((padrao, index) => {
                                return <div
                                    key={index}
                                    className='game-card scroll-item'
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
                                        onClick={() => {
                                            if (arrastou.current) {
                                                arrastou.current = false;
                                                return;
                                            }

                                            padrao.youtube
                                                ? handleShow(padrao)
                                                : openWindow(padrao);
                                        }}>
                                        <div className="row min-vh-50 align-content-center">
                                            <h2 className="rounded-left bg-dark my-0 py-1 rounded">
                                                {padrao.titulo}
                                            </h2>
                                            <p style={{ fontSize: ".7em", background: "rgba(255,255,255,.9)", color: "black" }}>{padrao.descricao}</p>
                                            <small className="small" style={{ fontSize: ".64em", background: "rgba(0,0,0,.9)" }}>{padrao.resumo}</small>
                                        </div>
                                    </button>
                                </div>;
                            })}
                        </div>
                    </Accordion.Body>
                </Accordion.Item>
                <Accordion.Item eventKey="1">
                    <Accordion.Header><h2>Estruturais</h2></Accordion.Header>
                    <Accordion.Body className="scroll-container"
                        onMouseDown={(event) => startDragEvent(event)} onMouseLeave={mouseLeave} onMouseUp={mouseUp}
                        onMouseMove={dragEvent}>
                        <div class="d-inline-flex w-100 justify-content-start scroll-content">
                            {padroes.Estruturais.map((padrao, index) => {
                                return <div
                                    key={index}
                                    className='game-card scroll-item'
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
                                        onClick={() => {
                                            if (arrastou.current) {
                                                arrastou.current = false;
                                                return;
                                            }

                                            padrao.youtube
                                                ? handleShow(padrao)
                                                : openWindow(padrao);
                                        }}>
                                        <div className="row min-vh-50 align-content-center">
                                            <h2 className="rounded-left bg-dark my-0 py-1 rounded">
                                                {padrao.titulo}
                                            </h2>
                                            <p style={{ fontSize: ".7em", background: "rgba(255,255,255,.9)", color: "black" }}>{padrao.descricao}</p>
                                            <small className="small" style={{ fontSize: ".64em", background: "rgba(0,0,0,.9)" }}>{padrao.resumo}</small>
                                        </div>
                                    </button>
                                </div>;
                            })}
                        </div>
                    </Accordion.Body>
                </Accordion.Item>
                <Accordion.Item eventKey="2">
                    <Accordion.Header><h2>Comportamentais</h2></Accordion.Header>
                    <Accordion.Body className="scroll-container"
                        onMouseDown={(event) => startDragEvent(event)} onMouseLeave={mouseLeave} onMouseUp={mouseUp}
                        onMouseMove={dragEvent}>
                        <div class="d-inline-flex w-100 justify-content-start scroll-content">
                            {padroes.Comportamentais.map((padrao, index) => {
                                return <div
                                    key={index}
                                    className='game-card scroll-item'
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
                                        onClick={() => {
                                            if (arrastou.current || padrao.noopener) {
                                                arrastou.current = false;
                                                return;
                                            }

                                            padrao.youtube
                                                ? handleShow(padrao)
                                                : openWindow(padrao);
                                        }}>
                                        <div className="row min-vh-50 align-content-center">
                                            <h2 className="rounded-left bg-dark my-0 py-1 rounded">
                                                {padrao.titulo}
                                            </h2>
                                            <p style={{ fontSize: ".7em", background: "rgba(255,255,255,.9)", color: "black" }}>{padrao.descricao}</p>
                                            <small className="small" style={{ fontSize: ".64em", background: "rgba(0,0,0,.9)" }}>{padrao.resumo}</small>
                                        </div>
                                    </button>
                                </div>;
                            })}
                        </div>
                    </Accordion.Body>
                </Accordion.Item>
            </Accordion>
            <YoutubePlayer video={video} show={show} handleClose={handleClose} />
        </>
    );
}

export default PadroesDeProjetos;