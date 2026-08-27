import "../../../css/jogos/linha-amarela/markers.css";
import "../../../css/jogos/linha-amarela/info.css";
import "../../../css/jogos/linha-amarela/logo.css";
import "../../../css/jogos/linha-amarela/game-over.css";
import "../../../css/jogos/linha-amarela/table.css";
import "../../../css/jogos/linha-amarela/enemies.css";
import "../../../css/jogos/linha-amarela/box.css";
import "../../../css/jogos/linha-amarela/spinner.css";
import "../../../js/jogos/linha-amarela/Background.js";
import "../../../js/jogos/linha-amarela/Counter.js";
import "../../../js/jogos/linha-amarela/PointsCounter.js";
import "../../../js/jogos/linha-amarela/GameObject.js";
import "../../../js/jogos/linha-amarela/SpaceInvaderNPC.js";
import "../../../js/jogos/linha-amarela/GameBase.js";
import "../../../js/jogos/linha-amarela/GameOver.js";
import "../../../js/jogos/linha-amarela/Share.js";
import "../../../js/jogos/linha-amarela/pontuacao.js";

import GameOver from "../../../components/jogos/linha-amarela/GameOver";
import Spinner from "../../../components/jogos/linha-amarela/Spinner";
import { useEffect, useState } from "react";
import { init } from "../../../js/jogos/linha-amarela/GameOver.js";
import { gtag } from "../../../js/gtag.js";
import { abrirSmartlinkUmaVez } from "../../../js/anuncios.js";
import Points from "../../../components/jogos/linha-amarela/GameOver/Points.jsx";
import Ranking from "../../../components/jogos/linha-amarela/GameOver/Ranking.jsx";
import Logo from "../../../components/jogos/linha-amarela/GameOver/Logo.jsx";
import Invaders from "../../../components/jogos/linha-amarela/GameOver/Invaders.jsx";
import { pontuacao } from "../../../js/jogos/linha-amarela/pontuacao.js";

function FimDeJogo({ title }) {
    const [userData, setUserData] = useState([]);
    useEffect(() => {
        if (title) {
            document.title = title;
        }
    }, [title]);
    useEffect(() => {
        gtag("event", "close_convert_lead", {
            currency: "USD",
            value: 0.0004
        });
        abrirSmartlinkUmaVez();

        async function setUser() {
            const response = await fetch('/api/jogos/linha-amarela/verifica-login.php');
            const dados = await response.json();

            setUserData(dados);
        }

        setUser();
        init();
        document.body.style.height = "auto";
        document.body.style.maxHeight = "auto";
    }, []);
    if (userData.usuario_id) {
        window.usuarioId = userData.usuario_id;
    }
    pontuacao();
    return (<>
        <Spinner />
        <GameOver />
        <Points />
        <Logo />
        <Ranking />
        <Invaders />
    </>);
}
export default FimDeJogo;