import { useEffect } from "react";
import { setUpIntro } from "../js/jogos/linha-amarela/intro-script";
import { ToastContainer } from "react-toastify";
import 'react-toastify/dist/ReactToastify.css';
import { useNavigate } from "react-router-dom";
function User() {
    const navigate = useNavigate();
    useEffect(() => {

        setUpIntro(() => {
            setTimeout(() => {
                navigate(`/`);
            }, 3000);
        });
    }, [navigate]);
    return (
        <div className="row" style={{ width: "stretch" }}>
            <div className="d-inline-flex text-left">
                {typeof usuario != 'undefined' && usuario.email ?
                    (
                        <div>
                            <small><strong>Bem vindo de volta, {usuario.nome}!</strong></small> <br />
                            <small>{usuario.email}</small> <br />
                            <img alt="sair" src="/img/jogos/linha-amarela/logout.png" width="32" height="32" id="sair" />
                        </div>
                    )
                    :
                    (<>
                        <div id="camada-email" className="px-2">
                            <small>
                                <strong>E-mail:</strong>
                                <input id="email" type="text" className="form-control" placeholder="E-mail" />
                            </small>
                        </div>
                        <div className="d-inline-flex text-left">
                            <div id="camada-nome" className="px-2 d-none">
                                <small>
                                    <strong>Nome:</strong>
                                    <input id="nome" maxlength="16" type="text" className="form-control" placeholder="Nome" />
                                </small>
                            </div>
                            <div id="camada-senha" className="px-2">
                                <small>
                                    <strong>Senha:</strong>
                                    <input id="senha" type="password" className="form-control" placeholder="Senha" />
                                    <small id="esqueci-senha" className="recovery-link m-1 text-nowrap">Esqueci minha senha</small>
                                </small>
                            </div>
                            <div id="camada-cadastro" className="px-2">
                                <button className="btn btn-success" id="login">Login</button>
                                <strong id="nao-tenho-conta" className="btn btn-primary">Criar conta</strong>
                            </div>
                            <div id="cadastrar-senha" className="px-2 d-none">
                                <small>
                                    <strong>Criar nova senha:</strong>
                                    <input id="cadastro-senha" type="password" className="form-control" placeholder="Senha" />
                                    <small id="sair-cadastro" className="recovery-link m-1 text-nowrap text-warning">Cancelar</small>
                                    <button className="btn btn-success" id="cadastrar">Cadastrar</button>
                                </small>
                            </div>
                            <div id="codigo-email" className="px-2 d-none">
                                <small>
                                    <strong>Código:</strong>
                                    <input id="codigo-enviado" type="text" className="form-control" placeholder="Cole aqui" />
                                    <button id="verificar" className="btn btn-success text-nowrap">Verificar</button>
                                    <small id="nao-recebi" className="recovery-link m-1 text-nowrap d-none">Não recebi o código</small>
                                    <small id="cancelar" className="recovery-link m-1 text-nowrap d-none text-warning">Cancelar</small>
                                </small>
                            </div>
                        </div>
                    </>)
                }
            </div>
        </div>
    )
}
export default User;