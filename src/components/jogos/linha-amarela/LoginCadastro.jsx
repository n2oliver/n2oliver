import { useEffect } from "react";
import { appUrl } from "../../../pages/jogos/linha-amarela/LinhaAmarelaIntro";
import { setUpAudioManager, setUpIntro } from "../../../js/jogos/linha-amarela/intro-script";
import { ToastContainer } from "react-toastify";
import 'react-toastify/dist/ReactToastify.css';

function LoginCadastro() {
    useEffect(()=>{
        const audioManager = setUpAudioManager();
        setUpIntro(audioManager);
    });
    return (
        <div className="container p-0" style={{ zIndex: 10, backgroundColor: "transparent !important", margin: "0 auto" }}>
            <div style={{ backgroundColor: "rgba(255, 255, 255, 0.20)", backdropFilter: "blur(10px)" }}>
                <a href={appUrl} className="linha-amarela-title" style={{ textDecoration: "none", color: "yellow", WebkitTextStroke: ".7px black", fontWeight: "bolder", fontSize: "26px" }}>Linha Amarela</a>
                <ToastContainer />
                <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul className="navbar-nav mr-auto">
                        <li className="nav-item active">
                            <a className="nav-link" href="/">n2oliver</a>
                        </li>
                        <li className="nav-item">
                            <div id="audio-button" className="unselectable audio-button menu-item mx-2"><img alt="auto-falante" width="32" height="32" src="/img/jogos/linha-amarela/icons8-alto-falante-100.png" /></div>
                        </li>

                    </ul>
                </div>
            </div>
            <div className="row">
                { typeof usuario != 'undefined' && usuario.email ?
                    (
                        <div className="login-cadastro col-md-6 col-lg-4 align-content-center">
                            <small><strong>Bem vindo de volta, { usuario.nome }!</strong></small> <br />
                            <small>{ usuario.email }</small> <br />
                            <img alt="sair" src="/img/jogos/linha-amarela/logout.png" width="32" height="32" id="sair" />
                        </div>
                    )
                    :
                    (
                        <div className="col-md-6 col-lg-4 login-cadastro d-flex align-content-center justify-content-center">
                            <small className="d-flex  flex-column text-left">
                                <div id="camada-email" className="px-2">
                                    <strong>E-mail:</strong>
                                    <input id="email" type="text" className="form-control" placeholder="E-mail" />
                                </div>
                                <div className="row text-left">
                                    <div id="camada-nome" className="px-2 d-none">
                                        <strong>Nome:</strong>
                                        <input id="nome" maxlength="16" type="text" className="form-control" placeholder="Nome" />
                                    </div>
                                    <div id="camada-senha" className="px-2">
                                        <strong>Senha:</strong>
                                        <div className="row align-items-start">
                                            <div className="col-6 pl-0 py-0">
                                                <input id="senha" type="password" className="form-control" placeholder="Senha" />
                                                <small id="esqueci-senha" className="recovery-link m-1 text-nowrap">Esqueci minha senha</small>
                                            </div>
                                            <div className="col-6 px-0 py-0">
                                                <button className="btn btn-success" id="login">Login</button>
                                            </div>
                                        </div>
                                        <strong id="nao-tenho-conta" className="btn btn-primary">Criar conta</strong>
                                    </div>
                                    <div id="cadastrar-senha" className="px-2 d-none">
                                        <strong>Criar nova senha:</strong>
                                        <div className="row align-items-start">
                                            <div className="col-6 pl-0 py-0">
                                                <input id="cadastro-senha" type="password" className="form-control" placeholder="Senha" />
                                                <small id="sair-cadastro" className="recovery-link m-1 text-nowrap text-warning">Cancelar</small>
                                            </div>
                                            <div className="col-6 px-0 py-0">
                                                <button className="btn btn-success" id="cadastrar">Cadastrar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="codigo-email" className="px-2 d-none">
                                        <strong>Código:</strong>
                                        <div className="row align-items-start">
                                            <div className="col-6 px-0 py-0">
                                                <input id="codigo-enviado" type="text" className="form-control" placeholder="Cole aqui" />
                                            </div>
                                            <div className="col-6 pr-0 py-0">
                                                <button id="verificar" className="btn btn-success text-nowrap">Verificar</button>
                                            </div>
                                        </div>
                                        <small id="nao-recebi" className="recovery-link m-1 text-nowrap d-none">Não recebi o código</small>
                                        <small id="cancelar" className="recovery-link m-1 text-nowrap d-none text-warning">Cancelar</small>
                                    </div>
                                </div>
                            </small>
                        </div>
                    )
                }
                <div className="jumbotron col-md-6 col-lg-8 text-center">
                    <h1 className="display-4" style={{ color: "white", wordWrap: "normal" }}>Eles iniciaram, a invasão começou!</h1>
                    <p className="lead" style={{ color: "white" }}>Ajude-nos a defender Long Trek de uma catástrofe alienígena!</p>

                    <button id="jogar" className="btn btn-danger btn-lg mb-1">Competição</button>
                    ou
                    <button id="partida" className="btn btn-warning btn-lg mb-1">Partida rápida</button>
                </div>
            </div>

            <br />
        </div>
    )
}
export default LoginCadastro;