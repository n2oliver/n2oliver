import "../../../css/jogos/caca-palavras/style.css"
import MainText from "../../../components/jogos/caca-palavras/intro/MainText";
import Spotlight from "../../../components/jogos/caca-palavras/intro/Spotlight";
import { useEffect } from "react";
import { abrirSmartlinkUmaVez } from "../../../js/anuncios";
import { gtag } from "../../../js/gtag";
import { $ } from "../../../App";

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
              window.location.href = '<?= $APP_URL ?>/jogo.php';
          },200);
            gtag("event", "close_convert_lead", {
              currency: "USD",
              value: 0.0004
            });
        });
        if(document.referrer == '<?=$APP_URL?>/jogos' |
            document.referrer == '<?=$APP_URL?>/jogos/'
        ) {
            setTimeout(()=>{
                document.getElementById('jogar').click();
            }, 3000)
        }
    })
    return (<>
        <MainText />
        <Spotlight />
    </>)
}

export default CacaPalavrasIntro;