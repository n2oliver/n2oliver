import { useEffect, useRef, useState } from "react";
import { API_URL } from "../../App";
import dados from "../../js/aplicativos.json";

function ListaProjetos() {
    const isDown = useRef(false);
    const startX = useRef(0);
    const scrollLeft = useRef(0);
    const arrastou = useRef(false);

    const [aplicativos, setAplicativos] = useState([]);

    useEffect(() => {
        async function carregar() {
            setAplicativos(dados);
        }
        carregar();
    }, [dados]);

    if (!aplicativos || (aplicativos && !aplicativos.length)) {
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
    return (
        <>
            <strong>
                <h2 className="my-0 py-4 text-start">Produtos</h2>
            </strong>
            <div className="d-inline-flex w-100 justify-content-start scroll-container" id="draggable-scroll"
                onMouseDown={(event) => startDragEvent(event)} onMouseLeave={ mouseLeave } onMouseUp={mouseUp}
                onMouseMove={dragEvent}>
                <div className="scroll-content">
                    {aplicativos.map((aplicativo, index) => {
                        return <div
                            key={index}
                            className='scroll-item'
                            onClick={() => setTimeout(() => {
                                if(!arrastou.current) {
                                    window.open(aplicativo.url);
                                }
                            }, 300)}>
                            <button
                                className="game-card"
                                data-game-url={aplicativo.url}
                                data-game-title={aplicativo.titulo}
                                data-game-desc={aplicativo.resumo}
                                data-game-imagem={aplicativo.imagem}
                                style={{
                                    background: `url(${API_URL + aplicativo.imagem})`
                                }}>
                                <p style={{ fontSize: ".7em", background: "rgba(0,0,0,.9)" }}>{aplicativo.resumo}</p>
                            </button>
                            <h4 className="border border-light py-1 rounded-pill px-4 m-auto text-center"style={{ maxWidth: "100%", width: "fit-content" }}>
                                {aplicativo.titulo}
                            </h4>
                        </div>;
                    })}
                </div>
            </div>
        </>
    )
}
export default ListaProjetos;