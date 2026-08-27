import { useEffect } from "react"
import { dark, init, reset, tecla, testa } from "../js/calculadora/script";
import "../css/calculadora/stylesheet.css";

function Calculadora({ title }) {
    useEffect(()=>{
        document.title = title;
        init();
    }, [title]);
    return <div className="calculadora m-auto p-4 border bg-light rounded outline m-2 fs-2"
        style={{ width: "stretch", minWidth: "320px", maxWidth: "640px" }}>
        <div className="d-flex  align-items-center justify-content-between">
            <a className="navbar-brand rounded" href="/">
                <img src="/img/n2-ico.jpg" width="32" className="rounded" alt="logo" />oliver
            </a>
            <div className="form-check form-switch">
                <i className="fa-regular fa-moon"></i>
                <input className="form-check-input" type="checkbox" role="switch" id="darkMode" onClick={(event) => { dark(event.target) }} />
                <label className="form-check-label" htmlFor="darkMode"></label>
            </div>
        </div>
        <div className="form-control bg-white">
            <input type="text" className="form-control bg-white fs-1 text-end border-0" id="digitedNumber"
                onKeyDown={(event) => testa(event) } />
            <div className="result_preview text-end text-light" id="result_preview"></div>
        </div>


        <div className="buttons" style={{ display: "grid", gridTemplateRows: "4fr" }}>
            <div className="buttons" style={{ height: "12vh", display: "grid", gridTemplateColumns: "auto auto auto auto auto" }}>
                <div className="button bg-danger text-light text-center align-content-center border rounded-pill outline m-2"
                    style={{ cursor: "pointer" }} onClick={(event) => { reset() }}>C</div>
                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>7</div>
                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>8</div>
                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>9</div>
                <div className="button bg-success text-light text-center align-content-center border rounded-pill outline m-2"
                    style={{ cursor: "pointer" }} id="equal">=</div>
            </div>
            <div className="buttons bg-light"
                style={{ height: "12vh", display: "grid", gridTemplateColumns: "auto auto auto auto auto" }}>
                <div className="button bg-warning text-light text-center align-content-center border rounded-pill outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>+
                </div>
                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>4
                </div>
                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>5
                </div>
                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>6
                </div>
                <div className="button bg-warning text-light text-center align-content-center border rounded-pill outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>*
                </div>
            </div>
            <div className="buttons bg-light"
                style={{ height: "12vh", display: "grid", gridTemplateColumns: "auto auto auto auto auto" }}>
                <div className="button bg-warning text-light text-center align-content-center border rounded-pill outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>-
                </div>
                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>1
                </div>
                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>2
                </div>
                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>3
                </div>
                <div className="button bg-warning text-light text-center align-content-center border rounded-pill outline m-2"
                    style={{ cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>/</div>
            </div>
            <div className="buttons bg-light"
                style={{ height: "12vh", display: "grid", gridTemplateColumns: "auto auto auto auto auto" }}>
                <div className="button bg-info text-light text-center align-content-center border rounded-pill outline m-2"
                    style={{ cursor:"pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>(</div>

                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>.
                </div>
                <div className="button bg-secondary text-light text-center align-content-center border rounded outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>0
                </div>
                <div className="button bg-warning text-light text-center align-content-center border rounded-pill outline m-2"
                    style={{ width: "stretch", height: "stretch", cursor: "pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>%
                </div>

                <div className="button bg-info text-light text-center align-content-center border rounded-pill outline m-2"
                    style={{ cursor:"pointer" }} onClick={(event) => { tecla(event.target.innerText) }}>)</div>
            </div>
        </div>
    </div>
}
export default Calculadora;