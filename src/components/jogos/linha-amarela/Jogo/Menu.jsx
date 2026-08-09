import "../../../../css/jogos/linha-amarela/info.css";
import "../../../../css/jogos/linha-amarela/logo.css";
import "../../../../css/jogos/linha-amarela/nivel.css";
import "../../../../css/jogos/linha-amarela/pause.css";
function Menu() {
    function setUser(usuario_id, partida_rapida) {
        window.usuarioId = typeof usuario_id != 'undefined' ? usuario_id : null;
        window.partidaRapida = typeof partida_rapida != 'undefined' ? partida_rapida : null;
    }
    if (typeof usuario_id != 'undefined' && typeof partida_rapida != 'undefined') {
        setUser(usuario_id, partidaRapida);
    }
    return (
        <div className="menu">
            <div id="pause-button" className="unselectable pause-button menu-item"><img alt="pause" src="/img/jogos/linha-amarela/pause-icon-png-12.jpg" loading="lazy" /></div>
            <div id="play-button" className="unselectable play-button menu-item"><img alt="play" src="/img/jogos/linha-amarela/png-clipart-digital-marketing-implementation-business-computer-programming-play-button-electronics-text.png" loading="lazy" /></div>
            <div id="audio-button" className="unselectable audio-button menu-item"><img alt="audio" width="100%" src="/img/jogos/linha-amarela/icons8-alto-falante-100.png" loading="lazy" /></div>
            <div id="logo" className="unselectable game-logo"><img alt="logo-linhaamarela" src="/img/jogos/linha-amarela/logo-linhaamarela.png" loading="lazy" /></div>
            <img alt="sair" src="/img/jogos/linha-amarela/logout.png" width="32" height="32" className="sair" loading="lazy" />
            {

                typeof usuario_id != 'undefined' && typeof partida_rapida != 'undefined' ?
                    (<>
                        <hr />
                        <div>
                            <div className="presentation-container unselectable">Pontos: <span id="points-counter">0</span></div>

                            <h1>Ranking</h1>
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
                    (<><hr />
                        <div>
                            <div className="presentation-container unselectable">Pontos: <span id="points-counter">0</span></div>
                        </div>
                    </>)
                }
        </div>)
}

export default Menu;