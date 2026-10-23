import { Routes, Route } from "react-router-dom";
import { useEffect, useState } from "react";
import $ from "./plugins/jquery-ui.js";

import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import './App.css';
import './css/styles-index.css';
import './css/games.css';
import './css/header.css';

import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import Navbar from './components/Navbar';
import Footer from './components/Footer';

import Home from "./pages/Home.jsx";
import Tecnologia from "./pages/Tecnologia.jsx";
import Jogos from "./pages/Jogos.jsx";
import Projetos from "./pages/Projetos.jsx";
import Extensoes from "./pages/Extensoes";
import NotFound from "./pages/NotFound";
import ComboMemoIntro from "./pages/jogos/combo-memo/ComboMemoIntro";
import CacaPalavrasIntro from "./pages/jogos/caca-palavras/CacaPalavrasIntro";
import ComboMemo from "./pages/jogos/combo-memo/jogar/ComboMemo";
import CacaPalavras from "./pages/jogos/caca-palavras/jogar/CacaPalavras";
import PalavrasCruzadasIntro from "./pages/jogos/palavras-cruzadas/PalavrasCruzadasIntro";
import PalavrasCruzadas from "./pages/jogos/palavras-cruzadas/jogar/PalavrasCruzadas";
import CaixaDeLetras from "./pages/jogos/caixa-de-letras/CaixaDeLetras";
import LinhaAmarelaIntro from "./pages/jogos/linha-amarela/LinhaAmarelaIntro.jsx";
import Jogo from "./pages/jogos/linha-amarela/Jogo.jsx";
import FimDeJogo from "./pages/jogos/linha-amarela/FimDeJogo.jsx";
import InspetorVisual from "./pages/extensoes/InspetorVisual.jsx";
import LeitorDePdf from "./pages/extensoes/LeitorDePdf.jsx";
import dados from "./js/api.json";
import Calculadora from "./pages/Calculadora.jsx";
let API_URL;
function App() {
  const [config, setConfig] = useState(null);

  useEffect(() => {
    async function carregar() {
      setConfig(dados);
    }

    carregar();
  }, [])
  if (!config || (config && !config.API_URL)) {
    return null;
  }

  API_URL = config.API_URL;

  return (
    <div className="App">
      <Navbar />
      <Routes>
        <Route path="/" element={<Home title="Início - n2oliver" />} />

        <Route path="/tecnologia" element={<Tecnologia title="Tecnologia - n2oliver" />} />
        <Route path="/tecnologia/:id" element={<Tecnologia title="Tecnologia - n2oliver" />} />
        <Route path="/noticias" element={<Tecnologia title="Tecnologia - n2oliver" />} />
        <Route path="/noticias/:id" element={<Tecnologia title="Tecnologia - n2oliver" />} />

        <Route path="/projetos" element={<Projetos title="Projetos - n2oliver" />} />
        <Route path="/aplicativos" element={<Projetos title="Projetos - n2oliver" />} />

        <Route path="/extensoes" element={<Extensoes title="Extensões - n2oliver" />} />

        <Route path="/extensoes/inspetor-visual" element={<InspetorVisual title="Inspetor Visual - n2oliver" />} />
        <Route path="/extensoes/inspetorvisual" element={<InspetorVisual title="Inspetor Visual - n2oliver" />} />

        <Route path="/extensoes/leitor-de-pdf" element={<LeitorDePdf title="Leitor de PDF - n2oliver" />} />
        <Route path="/extensoes/leitordepdf" element={<LeitorDePdf title="Leitor de PDF - n2oliver" />} />

        <Route path="/jogos" element={<Jogos title="Jogos - n2oliver" />} />

        <Route path="/jogos/combomemo" element={<ComboMemoIntro title="Combo-Memo Início - n2oliver" />} />
        <Route path="/jogos/combomemo/jogar" element={<ComboMemo title="Combo-Memo - n2oliver" />} />
        <Route path="/jogos/combo-memo" element={<ComboMemoIntro title="Combo-Memo Início - n2oliver" />} />
        <Route path="/jogos/combo-memo/jogar" element={<ComboMemo title="Combo-Memo - n2oliver" />} />

        <Route path="/jogos/cacapalavras" element={<CacaPalavrasIntro title="Caça-Palavras Início - n2oliver" />} />
        <Route path="/jogos/cacapalavras/jogar" element={<CacaPalavras title="Caça-Palavras - n2oliver" />} />
        <Route path="/jogos/caca-palavras" element={<CacaPalavrasIntro title="Caça-Palavras Início - n2oliver" />} />
        <Route path="/jogos/caca-palavras/jogar" element={<CacaPalavras title="Caça-Palavras - n2oliver" />} />

        <Route path="/jogos/palavrascruzadas" element={<PalavrasCruzadasIntro title="Palavras-Cruzadas Início - n2oliver" />} />
        <Route path="/jogos/palavrascruzadas/jogar" element={<PalavrasCruzadas title="Palavras-Cruzadas - n2oliver" />} />
        <Route path="/jogos/palavras-cruzadas" element={<PalavrasCruzadasIntro title="Palavras-Cruzadas Início - n2oliver" />} />
        <Route path="/jogos/palavras-cruzadas/jogar" element={<PalavrasCruzadas title="Tecnologia - n2oliver" />} />

        <Route path="/jogos/linhaamarela" element={<LinhaAmarelaIntro title="Linha Amarela Início - n2oliver" />} />
        <Route path="/jogos/linhaamarela/jogo" element={<Jogo title="Linha Amarela - n2oliver" />} />
        <Route path="/jogos/linhaamarela/fim" element={<FimDeJogo title="Linha Amarela Fim de Jogo - n2oliver" />} />
        <Route path="/jogos/linha-amarela" element={<LinhaAmarelaIntro title="Linha Amarela Início - n2oliver" />} />
        <Route path="/jogos/linha-amarela/jogo" element={<Jogo title="Linha Amarela - n2oliver" />} />
        <Route path="/jogos/linha-amarela/fim" element={<FimDeJogo title="Linha Amarela Fim de Jogo - n2oliver" />} />

        <Route path="/jogos/caixadeletras" element={<CaixaDeLetras title="Caixa de Letras - n2oliver" />} />
        <Route path="/jogos/caixa-de-letras" element={<CaixaDeLetras title="Caixa de Letras - n2oliver" />} />

        <Route path="/calculadora" element={<Calculadora title="Calculadora - n2oliver" />} />

        <Route path="*" element={<NotFound title="Página não encontrada - n2oliver" />} />
      </Routes>
      <Footer />
    </div>
  );
}
export { $, API_URL };
export default App;