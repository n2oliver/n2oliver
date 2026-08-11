import { Link } from "react-router-dom";
import { API_URL } from "../App";

function Navbar() {
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
    return !negativePathNames.includes(window.location.pathname) && (
        <nav className="navbar navbar-expand-lg navbar-dark bg-dark py-0 mx-0 m-auto px-0">
            <div style={{width: "100dvw"}}>

                <div className="d-flex w-100 navbar-container">
                    <Link className="navbar-brand rounded" to="/">
                        <img src="/img/n2-ico.jpg" width="32" className="rounded" alt="logo" />oliver
                    </Link>


                    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                    </button>
                    <div className="collapse navbar-collapse" id="navbarNav">
                        <ul className="navbar-nav">
                            <li className="nav-item"><Link className="nav-link" to="/"><i className="fa-solid fa-home"></i> Início</Link></li>
                            <li className="nav-item"><Link className="nav-link" to="/noticias"><i className="fa-solid fa-newspaper"></i> Notícias</Link></li>
                            <li className="nav-item"><Link className="nav-link" to="/jogos"><i className="fa-solid fa-puzzle-piece"></i> Jogos</Link></li>
                            <li className="nav-item"><Link className="nav-link" to="/aplicativos"><i className="fa-solid fa-hand-pointer"></i> Aplicativos</Link></li>
                            <li className="nav-item"><Link className="nav-link" to="/extensoes"><i className="fa-solid fa-hand-pointer"></i> Extensões</Link></li>
                            <li className="nav-item"><Link className="nav-link" to="/livros"><i className="fa-solid fa-store"></i> Livros</Link></li>
                            <li className="nav-item"><Link className="nav-link" to="/cursos"><i className="fa-solid fa-store"></i> Cursos</Link></li>
                            <li className="nav-item"><Link className="nav-link" to="/desenvolvedor"><i className="fa-solid fa-user"></i> Desenvolvedor</Link></li>
                            <li className="nav-item"><Link className="nav-link" to="/contato"><i className="fa-solid fa-envelope"></i> Contato</Link></li>
                        </ul>
                    </div>
                </div>

                <div className="gtranslate_wrapper ms-auto me-2 d-flex align-items-center"></div>


            </div>
        </nav>);
}

export default Navbar;