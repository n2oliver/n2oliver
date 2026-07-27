import "../../../css/sobre-mim.css"
import "../../../css/jogos/combo-memo/intro/intro.css"
import "../../../css/jogos/combo-memo/card/card.css";
import { virar } from "../../../js/jogos/combo-memo/card/card";
import "https://appsha-pnd.ctengine.io/js/script.js?wkey=97NjKiTr7b";
import { gtag } from "../../../js/gtag";
import { abrirSmartlinkUmaVez } from "../../../js/anuncios";
function Header() {
    gtag("event", "qualify_lead", {
        currency: "USD",
        value: 0.0004
    });
    function jogar (event) {
        event.preventDefault();
        abrirSmartlinkUmaVez();
        gtag("event", "close_convert_lead", {
            currency: "USD",
            value: 0.0004
        });
        setTimeout(() => {
            window.location.href = '/jogos/combo-memo/jogo';
        }, 200);
    }
    return (
        <header className="p-3 platform">
            <h1>Combo-Memo</h1>
            <div className="d-flex justify-content-center">
                <img onClick={(event) => virar(event)} src={`${window.API_URL}/src/img/jogos/combo-memo/card/card.png`} alt="Combo-Memo" className="card animar sem-fundo" id="card" />
                <img onClick={(event) => virar(event)} src={`${window.API_URL}/src/img/jogos/combo-memo/card/card.png`} alt="Combo-Memo" className="card animar sem-fundo" id="card" />
            </div>
            <main className="container m-auto d-flex justify-content-center">
                <button id="jogar-agora" className="btn btn-warning" onClick={jogar}>Jogar Agora</button><p className="m-auto">Teste sua memória e tente fazer o maior combo possível! Combine as cartas com o mínimo de erros para ganhar pontos extras.</p>
            </main>
        </header>);
}
export default Header;