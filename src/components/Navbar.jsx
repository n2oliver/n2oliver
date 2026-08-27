import { Link, useLocation } from "react-router-dom";
import { API_URL } from "../App";
import { autotranslate } from "../js/autotranslate";
import "../css/gtranslate.css";
import { useEffect } from "react";

function Navbar() {
    const location = useLocation();

    const negativePathNames = [
        "/jogos/linha-amarela",
        "/jogos/linha-amarela/",
        "/jogos/linhaamarela",
        "/jogos/linhaamarela/",
        "/jogos/linha-amarela/jogo",
        "/jogos/linha-amarela/jogo/",
        "/jogos/linhaamarela/jogo",
        "/jogos/linhaamarela/jogo/",
        "/jogos/linha-amarela/fim",
        "/jogos/linha-amarela/fim/",
        "/jogos/linhaamarela/fim",
        "/jogos/linhaamarela/fim/"
    ];

    useEffect(() => {
        autotranslate();
    }, [])
    if (negativePathNames.includes(location.pathname)) {
        return null;
    }

    return (
        <>
            <nav className="navbar navbar-expand-lg navbar-dark bg-dark py-0 mx-0 m-auto px-0">
                <div className="d-flex col-md-10 m-auto">

                    <div className="d-flex w-100">

                        <Link className="navbar-brand rounded text-start" to="/" style={{ width: "stretch" }}>
                            <img
                                src="/img/n2-ico.jpg"
                                width="32"
                                className="rounded"
                                alt="logo"
                            />
                            oliver
                        </Link>
                        <div class="flex-column">
                            <button
                                className="navbar-toggler"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarNav"
                                aria-controls="navbarNav"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                                style={{
                                    width: "stretch"
                                }}>
                                <span className="navbar-toggler-icon"></span>
                            </button>

                            <div className="collapse navbar-collapse" id="navbarNav">
                                <ul className="navbar-nav">

                                    <li className="nav-item">
                                        <Link className="nav-link" to="/">
                                            <i className="fa-solid fa-home"></i> Início
                                        </Link>
                                    </li>

                                    <li className="nav-item">
                                        <Link className="nav-link" to="/tecnologia">
                                            <i className="fa-solid fa-newspaper"></i> Tecnologia
                                        </Link>
                                    </li>

                                    <li className="nav-item">
                                        <Link className="nav-link" to="/jogos">
                                            <i className="fa-solid fa-puzzle-piece"></i> Jogos
                                        </Link>
                                    </li>

                                    <li className="nav-item">
                                        <Link className="nav-link" to="/aplicativos">
                                            <i className="fa-solid fa-hand-pointer"></i> Projetos
                                        </Link>
                                    </li>

                                    <li className="nav-item">
                                        <Link className="nav-link" to="/calculadora">
                                            <i className="fa-solid fa-calculator"></i> Calculadora Online
                                        </Link>
                                    </li>

                                    <li className="nav-item">
                                        <div className="gtranslate_wrapper ms-auto me-2 d-flex align-items-center"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </>
    );
}

export default Navbar;