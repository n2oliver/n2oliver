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
import { abrirSmartlinkUmaVez } from "./js/anuncios";

import Navbar from './components/Navbar';
import Footer from './components/Footer';

import Home from "./pages/Home.jsx";
import Tecnologia from "./pages/Tecnologia.jsx";
import Jogos from "./pages/Jogos.jsx";
import Projetos from "./pages/Projetos.jsx";
import Extensoes from "./pages/Extensoes";
import Livros from "./pages/Livros";
import Cursos from "./pages/Cursos";
import Desenvolvedor from "./pages/Desenvolvedor";
import Contato from "./pages/Contato";
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
        <Route path="/" element={<Home />} />
        
        <Route path="/tecnologia" element={<Tecnologia />} />
        <Route path="/tecnologia/:id" element={<Tecnologia />} />
        <Route path="/noticias" element={<Tecnologia />} />
        <Route path="/noticias/:id" element={<Tecnologia />} />

        <Route path="/projetos" element={<Projetos />} />
        <Route path="/aplicativos" element={<Projetos />} />
        
        <Route path="/extensoes" element={<Extensoes />} />

        <Route path="/extensoes/inspetor-visual" element={<InspetorVisual />} />
        <Route path="/extensoes/inspetorvisual" element={<InspetorVisual />} />

        <Route path="/extensoes/leitor-de-pdf" element={<LeitorDePdf />} />
        <Route path="/extensoes/leitordepdf" element={<LeitorDePdf />} />

        <Route path="/livros" element={<Livros />} />
        <Route path="/cursos" element={<Cursos />} />
        <Route path="/desenvolvedor" element={<Desenvolvedor />} />
        <Route path="/contato" element={<Contato />} />

        <Route path="/jogos" element={<Jogos />} />

        <Route path="/jogos/combomemo" element={<ComboMemoIntro />} />
        <Route path="/jogos/combomemo/jogar" element={<ComboMemo />} />
        <Route path="/jogos/combo-memo" element={<ComboMemoIntro />} />
        <Route path="/jogos/combo-memo/jogar" element={<ComboMemo />} />

        <Route path="/jogos/cacapalavras" element={<CacaPalavrasIntro />} />
        <Route path="/jogos/cacapalavras/jogar" element={<CacaPalavras />} />
        <Route path="/jogos/caca-palavras" element={<CacaPalavrasIntro />} />
        <Route path="/jogos/caca-palavras/jogar" element={<CacaPalavras />} />

        <Route path="/jogos/palavrascruzadas" element={<PalavrasCruzadasIntro />} />
        <Route path="/jogos/palavrascruzadas/jogar" element={<PalavrasCruzadas />} />
        <Route path="/jogos/palavras-cruzadas" element={<PalavrasCruzadasIntro />} />
        <Route path="/jogos/palavras-cruzadas/jogar" element={<PalavrasCruzadas />} />

        <Route path="/jogos/linhaamarela" element={<LinhaAmarelaIntro />} />
        <Route path="/jogos/linhaamarela/jogo" element={<Jogo />} />
        <Route path="/jogos/linhaamarela/fim" element={<FimDeJogo />} />
        <Route path="/jogos/linha-amarela" element={<LinhaAmarelaIntro />} />
        <Route path="/jogos/linha-amarela/jogo" element={<Jogo />} />
        <Route path="/jogos/linha-amarela/fim" element={<FimDeJogo />} />

        <Route path="/jogos/caixadeletras" element={<CaixaDeLetras />} />
        <Route path="/jogos/caixa-de-letras" element={<CaixaDeLetras />} />

        <Route path="*" element={<NotFound />} />
      </Routes>
      <Footer />
    </div>
  );
}
document.addEventListener('DOMContentLoaded', function () {
  window.onclick = () => {
    window.onclick = () => {
      abrirSmartlinkUmaVez();
      window.onclick = null;
    }
  }
});
export { $, API_URL };
export default App;