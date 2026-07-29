import "../../../css/jogos/caca-palavras/style.css"
import MainText from "../../../components/jogos/caca-palavras/intro/MainText";
import { useEffect } from "react";
import { abrirSmartlinkUmaVez } from "../../../js/anuncios";
import { gtag } from "../../../js/gtag";
import { $ } from "../../../App";
import Spotlight from "../../../components/jogos/caca-palavras/intro/Spotlight";

function CacaPalavrasIntro() {
    useEffect(()=>{
        gtag("event", "qualify_lead", {
          currency: "USD",
          value: 0.0004
        });
        $('#jogar').click((event)=>{
            event.preventDefault();
            abrirSmartlinkUmaVez();
            setTimeout(()=>{
              window.location.href = '/jogos/caca-palavras/jogar';
          },200);
            gtag("event", "close_convert_lead", {
              currency: "USD",
              value: 0.0004
            });
        });
    })
    return (<>
        <MainText />
        <Spotlight />
    </>)
}

export default CacaPalavrasIntro;