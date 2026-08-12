import { useEffect } from "react";
import GameSound from "../../../components/jogos/linha-amarela/GameSound";
import BGTransparent from "../../../components/jogos/linha-amarela/Jogo/BGTransparent";
import CreatureDie from "../../../components/jogos/linha-amarela/Jogo/CreatureDie";
import GameOver from "../../../components/jogos/linha-amarela/Jogo/GameOver";
import Level from "../../../components/jogos/linha-amarela/Jogo/Level";
import Menu from "../../../components/jogos/linha-amarela/Jogo/Menu";
import Platform from "../../../components/jogos/linha-amarela/Jogo/Platform";
import RedBall from "../../../components/jogos/linha-amarela/Jogo/RedBall";
import ShotAudio from "../../../components/jogos/linha-amarela/Jogo/ShotAudio";
import SongYellowLine from "../../../components/jogos/linha-amarela/Jogo/SongYellowLine";
import Markers from "../../../components/jogos/linha-amarela/Markers";
import Spinner from "../../../components/jogos/linha-amarela/Spinner";
import Pause from "../../../components/jogos/linha-amarela/Jogo/Pause";

import '../../../css/home.css';
import "../../../css/games.css";
import "../../../css/jogos/linha-amarela/audio.module.css";
import "../../../css/jogos/linha-amarela/box.module.css";
import "../../../css/jogos/linha-amarela/enemies.module.css";
import "../../../css/jogos/linha-amarela/game.module.css";
import "../../../css/jogos/linha-amarela/intro.module.css";
import "../../../css/jogos/linha-amarela/style.module.css";
import "../../../css/jogos/linha-amarela/game-over.module.css";

import "../../../js/anuncios";
import "../../../js/jogos/linha-amarela/Background";
import "../../../js/jogos/linha-amarela/Ball";
import "../../../js/jogos/linha-amarela/Counter";
import "../../../js/jogos/linha-amarela/Game";
import "../../../js/jogos/linha-amarela/GameBase";
import "../../../js/jogos/linha-amarela/GameObject";
import "../../../js/jogos/linha-amarela/GameOver";
import "../../../js/jogos/linha-amarela/LevelsCounter";
import "../../../js/jogos/linha-amarela/LivesCounter";
import "../../../js/jogos/linha-amarela/LivesCounter";
import "../../../js/jogos/linha-amarela/Platform";
import "../../../js/jogos/linha-amarela/PointsCounter";
import "../../../js/jogos/linha-amarela/SpaceInvader";
import "../../../js/jogos/linha-amarela/SpaceInvaderNPC";
import "../../../js/jogos/linha-amarela/YellowBox";
import "../../../js/jogos/linha-amarela/YellowBoxNPC";
import { init } from "../../../js/jogos/linha-amarela/Game";
import YellowBox from "../../../components/jogos/linha-amarela/Jogo/YellowBox";
import Intro from "../../../components/jogos/linha-amarela/Jogo/Intro";

function Jogo() {
    let partida_rapida;
    useEffect(() => {
        $('.sair').click(() => {
            window.location.href = '/api/jogos/linha-amarela/sair.php';
        });
        if(!window.game) {
            init();
        }
    });
    return (<>
        <Spinner />
        <GameSound />
        <BGTransparent />
        <Menu />
        <Markers />
        <Level />
        <GameOver />
        <Platform />
        <YellowBox />
        <RedBall />
        <Pause />
        <SongYellowLine />
        <ShotAudio />
        <CreatureDie />
        <Intro />
    </>);
}
export default Jogo;