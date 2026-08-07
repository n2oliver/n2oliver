import GameSound from "../../../components/jogos/linha-amarela/GameSound";
import BGTransparent from "../../../components/jogos/linha-amarela/Jogo/BGTransparent";
import GameOver from "../../../components/jogos/linha-amarela/Jogo/GameOver";
import Level from "../../../components/jogos/linha-amarela/Jogo/Level";
import Menu from "../../../components/jogos/linha-amarela/Jogo/Menu";
import Markers from "../../../components/jogos/linha-amarela/Markers";
import Spinner from "../../../components/jogos/linha-amarela/Spinner";

import "../../../css/games.css";
import "../../../css/jogos/linha-amarela/audio.css";
import "../../../css/jogos/linha-amarela/box.css";
import "../../../css/jogos/linha-amarela/enemies.css";
import "../../../css/jogos/linha-amarela/game.css";
import "../../../css/jogos/linha-amarela/intro.css";
import "../../../css/jogos/linha-amarela/style.css";

function Jogo() {
    return (<>
        <Spinner />
        <GameSound />
        <BGTransparent />
        <Menu />
        <Markers />
        <Level />
        <GameOver />
    </>);
}
export default Jogo;