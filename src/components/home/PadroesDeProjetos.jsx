import { useEffect, useRef, useState } from "react";
import { API_URL } from "../../App";
import dados from "../../js/padroes.json";
import Accordion from 'react-bootstrap/Accordion';
import YoutubePlayer from "../YoutubePlayer";

function PadroesDeProjetos() {
    const [padroes, setPadroes] = useState({});
    const [show, setShow] = useState(false);
    const [video, setVideo] = useState({});
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
        carregar();
    }, {})
    if (!padroes || (padroes && !Object.entries(padroes).length)) {
        return;
    }
    function startDragEvent(e) {
        arrastou.current = true;
        isDown.current = true;
        e.currentTarget.classList.add('active');
        // Get initial X coordinate relative to the container
        startX.current = e.pageX - e.currentTarget.offsetLeft;
        // Get initial scroll position
        scrollLeft.current = e.currentTarget.scrollLeft;
    }
    function mouseLeave() {
        isDown.current = false;
    }
    function mouseUp() {
        arrastou.current = false;
        isDown.current = false;
    }
    function dragEvent(e) {
        arrastou.current = true;
        if (!isDown.current) return;

        e.preventDefault();

        const container = e.currentTarget;

        const x = e.pageX - container.offsetLeft;
        const walk = x - startX.current;

        container.scrollLeft = scrollLeft.current - walk;
    }
    function openWindow(padrao) {
        setTimeout(() => {
            window.open(padrao.url);
        }, 200);
    }
    return (
        <>
            <strong>
                <h2 className="my-0 py-4 text-start">Padrões de Projeto</h2>
            </strong>
            <Accordion defaultActiveKey="0" flush data-bs-theme="dark">
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
                                        onClick={
                                            () => padrao.youtube ? handleShow(padrao) : openWindow(padrao)
                                        }>
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
                                        onClick={
                                            () => padrao.youtube ? handleShow(padrao) : openWindow(padrao)
                                        }>
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
                                        onClick={
                                            () => {
                                                if(padrao.noopener) {
                                                    return;
                                                }
                                                return padrao.youtube ? handleShow(padrao) : openWindow(padrao);
                                            }
                                        }>
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