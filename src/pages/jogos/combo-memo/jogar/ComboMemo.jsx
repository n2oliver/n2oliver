import "../../../../css/jogos/combo-memo/style.css"
import "../../../../css/jogos/combo-memo/platform/platform.css"
import "../../../../css/jogos/combo-memo/card/card.css"
import "../../../../css/jogos/combo-memo/great/congratulations.css"
import Menu from "../../../../components/jogos/combo-memo/Menu";
import Mesa from "../../../../components/jogos/combo-memo/Mesa";
import InGameAAds from "../../ads/InGameAAds";
import "../../../../js/jogos/combo-memo/platform/platform";

function ComboMemo() {
    return (<>
        <Menu />
        <Mesa />
        <InGameAAds />
    </>)
}
export default ComboMemo;