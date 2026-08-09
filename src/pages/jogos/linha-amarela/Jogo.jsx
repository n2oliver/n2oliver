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
import "../../../css/jogos/linha-amarela/audio.css";
import "../../../css/jogos/linha-amarela/box.css";
import "../../../css/jogos/linha-amarela/enemies.css";
import "../../../css/jogos/linha-amarela/game.css";
import "../../../css/jogos/linha-amarela/intro.css";
import "../../../css/jogos/linha-amarela/style.css";
import "../../../js/jogos/linha-amarela/pontuacao";

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
import { Game } from "../../../js/jogos/linha-amarela/Game";
import YellowBox from "../../../components/jogos/linha-amarela/Jogo/YellowBox";
import Intro from "../../../components/jogos/linha-amarela/Jogo/Intro";

function Jogo() {
    let partida_rapida;
    useEffect(() => {
        async function obterRanking(idUsuario) {
            $('.spinner').removeClass('d-none');
            const response = await fetch('/api/jogos/linha-amarela/obter-ranking.php', {
                method: 'POST',
                type: 'json/application',
                data: {
                    id_usuario: idUsuario
                }
            });
            const data = await response.json();
            $('.spinner').addClass('d-none');
            const pontuacoes = data;
            const ranking = $('#ranking');
            ranking.html(pontuacoes);
        }
        async function setUpGame() {
            $('.spinner').removeClass('d-none');
            const urlParams = new URLSearchParams(window.location.search);
            const partidaRapida = urlParams.get('partida_rapida');
            const setup = await fetch(`/api/jogos/linha-amarela/setup-game.php/?partida_rapida=${partidaRapida}`);
            const page = await setup.text();
            console.log(page);
            if(page) {
                window.location.href = page;
                return;
            }
            partida_rapida = true;
            sessionStorage.setItem('ingame', true);
            let level = 1;
            const objects = [
                "yellow-box",
                "platform",
                "points-counter",
                "levels-counter",
                "vidas",
            ];
            for(let objectId of objects) {
                if(!document.getElementById(objectId)) {
                    setTimeout(()=>{
                        setUpGame();
                    }, 1000);
                    return;
                }
            }
            if(!window.game) {
                window.game = new Game(level);
            }
            document.getElementById("restart").addEventListener('click',()=>{
                gtag("event", "close_convert_lead", {
                    currency: "USD",
                    value: 0.0004
                });
                setTimeout(()=>{
                    window.location.reload();
                }, 500);
            });
            
            window.onclick = (e) => {
                if(window.game) {
                    window.game.audioManager.playAsBgMusic();
                    game.start(e);      
                }
            }
        }
        $('.sair').click(() => {
            window.location.href = '/api/jogos/linha-amarela/sair.php';
        });
        setUpGame();
        if (typeof usuarioId !== 'undefined') obterRanking(usuarioId);
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