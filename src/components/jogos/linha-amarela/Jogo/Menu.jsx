import { useEffect, useState } from "react";
import "../../../../css/jogos/linha-amarela/info.css";
import "../../../../css/jogos/linha-amarela/logo.css";
import "../../../../css/jogos/linha-amarela/nivel.css";
import "../../../../css/jogos/linha-amarela/pause.css";
function Menu() {
    const [userData, setUserData] = useState([]);
    useEffect(()=>{
        async function setUser() {
            const response = await fetch('/api/jogos/linha-amarela/verifica-login.php');
            const dados = await response.json();

            if(dados.code == 401) {
                window.location.href = "/jogos/linha-amarela";
            }
            setUserData(dados);
        }
        setUser();
    }, []);
    
    if (typeof userData.usuario_id != 'undefined') {
        window.usuarioId = typeof userData.usuario_id != 'undefined' ? userData.usuario_id : null;
    }
    if (typeof userData.partida_rapida != 'undefined') {
        window.partidaRapida = typeof userData.partida_rapida != 'undefined' ? userData.partida_rapida : null;
    }
    return (
        <div className="menu" style={{
            position: "absolute",
            display: "grid",
            width: "fit-content",
            right: "0px",
            gridTemplateColumns: "auto auto auto auto"
        }}>
            <div id="pause-button" className="unselectable pause-button menu-item"><img alt="pause" src="/img/jogos/linha-amarela/pause-icon-png-12.jpg" loading="lazy" /></div>
            <div id="play-button" className="unselectable play-button menu-item"><img alt="play" src="/img/jogos/linha-amarela/png-clipart-digital-marketing-implementation-business-computer-programming-play-button-electronics-text.png" loading="lazy" /></div>
            <div id="audio-button" className="unselectable audio-button menu-item"><img alt="audio" width="100%" src="/img/jogos/linha-amarela/icons8-alto-falante-100.png" loading="lazy" /></div>
            <div id="logo" className="unselectable game-logo"><img alt="logo-linhaamarela" src="/img/jogos/linha-amarela/logo-linhaamarela.png" loading="lazy" /></div>
            <img alt="sair" src="/img/jogos/linha-amarela/logout.png" width="32" height="32" className="sair" loading="lazy" />
            {

                userData.usuario_id ?
                    (<>
                        <div></div><div></div><div></div>
                        <div>
                            <div className="presentation-container unselectable">Pontos: <span id="points-counter">0</span></div>

                            <h1 class="ranking-title">Ranking</h1>
                            <div>
                                <table id="all-points" className="table">
                                    <thead>
                                        <tr>
                                            <th>Posição</th>
                                            <th>Usuário</th>
                                            <th>Pontuação</th>
                                        </tr>
                                    </thead>
                                    <tbody id="ranking">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </>)
                    :
                    (<><div></div>
                        <div>
                            <div className="presentation-container unselectable">Pontos: <span id="points-counter">0</span></div>
                        </div>
                    </>)
                }
        </div>)
}

export default Menu;