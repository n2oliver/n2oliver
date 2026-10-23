import { useEffect, useRef, useState } from "react";
import { API_URL } from "../../App";
import dados from "../../js/informatica-basica.json";
import Accordion from 'react-bootstrap/Accordion';
import YoutubePlayer from "../YoutubePlayer";

function InformaticaBasica() {
    const [aulas, setAulas] = useState({});
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
            setAulas(dados);
        }
        carregar();
    }, {})
    if (!aulas || (aulas && !Object.entries(aulas).length)) {
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
    function openWindow(aula) {
        setTimeout(() => {
            window.open(aula.url);
        }, 200);
    }
    return (
        <>
            <strong>
                <h4 className="my-0 pb-2 pt-2 text-start">Informática Básica</h4>
            </strong>
            <Accordion activeKey={activeKey} onSelect={(eventKey) => setActiveKey(eventKey)} flush data-bs-theme="dark">
                <Accordion.Item eventKey="0">
                    <Accordion.Header><h2>Aulas</h2></Accordion.Header>
                    <Accordion.Body className="scroll-container"
                        onMouseDown={(event) => startDragEvent(event)} onMouseLeave={mouseLeave} onMouseUp={mouseUp}
                        onMouseMove={dragEvent}>
                        <div class="d-inline-flex w-100 justify-content-start scroll-content">
                            {aulas.Aulas.map((aula, index) => {
                                return <div
                                    key={index}
                                    className='game-card scroll-item'
                                    style={{
                                        background: `url(${API_URL + aula.imagem})`
                                    }}>
                                    <button
                                        data-game-url={aula.url}
                                        data-game-youtube={aula.youtube}
                                        data-game-tiktok={aula.tiktok}
                                        data-game-title={aula.titulo}
                                        data-game-desc={aula.descricao}
                                        data-game-imagem={aula.imagem}
                                        onClick={() => {
                                            if (arrastou.current) {
                                                arrastou.current = false;
                                                return;
                                            }

                                            aula.youtube
                                                ? handleShow(aula)
                                                : openWindow(aula);
                                        }}>
                                        <div className="row min-vh-50 align-content-center">
                                            <h2 className="rounded-left bg-dark my-0 py-1 rounded">
                                                {aula.titulo}
                                            </h2>
                                            <p style={{ fontSize: ".7em", background: "rgba(255,255,255,.9)", color: "black" }}>{aula.descricao}</p>
                                            <small className="small" style={{ fontSize: ".64em", background: "rgba(0,0,0,.9)" }}>{aula.resumo}</small>
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

export default InformaticaBasica;