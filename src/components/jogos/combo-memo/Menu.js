import "../../../css/jogos/combo-memo/style.css"
import "../../../css/jogos/combo-memo/platform/platform.css"
import "../../../css/jogos/combo-memo/card/card.css"
import "../../../css/jogos/combo-memo/great/congratulations.css"
import { params2, SMARTLINK_2 } from "../../../js/anuncios";
function Menu() {
    return (
        <div class="menu">
            <div class="d-flex row align-content-center">
                <h1>COMBO-MEMO</h1>
            </div>
            <h3>
                <span class="score-label">Pontuação máxima:</span> <span id="high-score" class="score-value">0</span>% de acertos |
                <span class="score-label">Acerto:</span> <span id="acerto" class="score-value">0</span>% |
                <span class="error-value">Erros:</span> <span id="erros" class="error-value">0</span>
            </h3>
            <div class="botoes">
                <button id="btnRestart"
                    onClick={() => {
                        setTimeout(() => {
                            window.open(SMARTLINK_2, '_blank', params2);
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