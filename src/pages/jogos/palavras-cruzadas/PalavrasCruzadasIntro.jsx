import "../../../css/jogos/palavras-cruzadas/style.css"
import MainText from "../../../components/jogos/palavras-cruzadas/intro/MainText";
import { useEffect } from "react";
import { abrirSmartlinkUmaVez } from "../../../js/anuncios";
import { gtag } from "../../../js/gtag";
import { $ } from "../../../App";

function PalavrasCruzadasIntro({ title }) {
  useEffect(() => {
    if (title) {
      document.title = title;
    }
  }, [title]);
  useEffect(() => {
    gtag("event", "qualify_lead", {
      currency: "USD",
      value: 0.0004
    });
    document.querySelector('#main-text a').addEventListener('click', (event) => {
      event.preventDefault();
      abrirSmartlinkUmaVez();

      setTimeout(() => {
        window.location.href = '/jogos/palavras-cruzadas/jogar';
      }, 200);

      gtag("event", "close_convert_lead", {
        currency: "USD",
        value: 0.0004
      });
    });
  })
  return (<>
    <MainText />
  </>)
}

export default PalavrasCruzadasIntro;