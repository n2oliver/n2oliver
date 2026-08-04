import { params1, SMARTLINK_1 } from "../../../js/anuncios";
import { percentual } from "../../../js/jogos/combo-memo/platform/platform";
function Menu() {
    return (
        <div className="menu">
            <div className="d-flex row align-content-center">
                <h1>COMBO-MEMO</h1>
            </div>
            <h3>
                <span className="score-label">Pontuação máxima:</span> <span id="high-score" className="score-value">{ localStorage.combo_memo_high_score || percentual }</span>% de acertos |
                <span className="score-label">Acerto:</span> <span id="acerto" className="score-value">0</span>% |
                <span className="error-value">Erros:</span> <span id="erros" className="error-value">0</span>
            </h3>
            <div className="botoes">
                <button id="btnRestart"
                    onClick={() => {
                        setTimeout(() => {
                            window.open(SMARTLINK_1, '_blank', params1);
                            setTimeout(() => {
                                window.location.reload(); // ou, se quiser reiniciar sem recarregar: zerar o estado e chamar embaralhar()
                            }, 1200);
                        }, 600);
                    }}>Reiniciar</button>
            </div>
        </div>
    )
}
export default Menu;