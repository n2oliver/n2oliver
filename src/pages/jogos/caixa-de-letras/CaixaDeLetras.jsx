import GameContainer from "../../../components/jogos/caixa-de-letras/GameContainer";
import InGameAAds from "../ads/InGameAAds";
import "../../../css/jogos/caixa-de-letras/style.module.css";

function CaixaDeLetras() {
    return (
        <>
            <GameContainer />
            <InGameAAds />
        </>
    );
}
export default CaixaDeLetras;