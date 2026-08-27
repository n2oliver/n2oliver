import GameContainer from "../../../components/jogos/caixa-de-letras/GameContainer";
import InGameAAds from "../ads/InGameAAds";
import "../../../css/jogos/caixa-de-letras/style.css";
import { useEffect } from "react";

function CaixaDeLetras({ title }) {
    useEffect(() => {
        if (title) {
            document.title = title;
        }
    }, [title]);
    return (
        <>
            <GameContainer />
            <InGameAAds />
        </>
    );
}
export default CaixaDeLetras;