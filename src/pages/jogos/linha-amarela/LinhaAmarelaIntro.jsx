const appUrl = '/jogos/linha-amarela';
import "../../../js/jogos/linha-amarela/intro-script.js";
import GameSound from "../../../components/jogos/linha-amarela/GameSound";
import LoginCadastro from "../../../components/jogos/linha-amarela/LoginCadastro";
import MainMenuSound from "../../../components/jogos/linha-amarela/MainMenuSound";
import Spinner from "../../../components/jogos/linha-amarela/Spinner";
import "../../../js/jogos/linha-amarela/Login";
import "../../../js/gtag_dispatcher";

import "../../../css/jogos/linha-amarela/style.css";
import "../../../css/jogos/linha-amarela/logo.css";
import "../../../css/jogos/linha-amarela/landing.css";
import "../../../css/jogos/linha-amarela/audio.css";
import "../../../css/jogos/linha-amarela/pause.css";
import "../../../css/jogos/linha-amarela/spinner.css";
import "../../../css/jogos/linha-amarela/intro.css";

function LinhaAmarelaIntro() {
    return (<>
        <Spinner />
        <MainMenuSound />
        <GameSound />
        <LoginCadastro />
    </>)
}

export default LinhaAmarelaIntro;
export {appUrl};