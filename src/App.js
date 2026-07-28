
import { Routes, Route } from "react-router-dom";

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

import Home from "./pages/Home";
import Noticias from "./pages/Noticias";
import Jogos from "./pages/Jogos";
import Aplicativos from "./pages/Aplicativos";
import Extensoes from "./pages/Extensoes";
import Livros from "./pages/Livros";
import Cursos from "./pages/Cursos";
import Desenvolvedor from "./pages/Desenvolvedor";
import Contato from "./pages/Contato";
import NotFound from "./pages/NotFound";
import ComboMemoIntro from "./pages/jogos/combo-memo/ComboMemoIntro";
import CacaPalavrasIntro from "./pages/jogos/caca-palavras/CacaPalavrasIntro";
import { useEffect, useState } from "react";
import $ from "jquery";
import ComboMemo from "./pages/jogos/combo-memo/jogar/ComboMemo";
import CacaPalavras from "./pages/jogos/caca-palavras/jogar/CacaPalavras";

function App() {
  const [config, setConfig] = useState([]);

  useEffect(() => {
    async function carregar() {
      const response = await fetch("/api/obter-api.php");
      const dados = await response.json()
      setConfig(dados);
    }

    carregar();
  }, [])
  if (!config || (config && !config.API_URL)) {
    return;
  }
  
  window.API_URL = config.API_URL;

  return (
    <div className="App">
      <Navbar />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/noticias" element={<Noticias />} />
        <Route path="/noticias/:id" element={<Noticias />} />
        <Route path="/jogos" element={<Jogos />} />
        <Route path="/aplicativos" element={<Aplicativos />} />
        <Route path="/extensoes" element={<Extensoes />} />
        <Route path="/livros" element={<Livros />} />
        <Route path="/cursos" element={<Cursos />} />
        <Route path="/desenvolvedor" element={<Desenvolvedor />} />
        <Route path="/contato" element={<Contato />} />

        <Route path="/jogos/combo-memo" element={<ComboMemoIntro />} />
        <Route path="/jogos/combo-memo/jogar" element={<ComboMemo />} />

        <Route path="/jogos/caca-palavras" element={<CacaPalavrasIntro />} />
        <Route path="/jogos/caca-palavras/jogar" element={<CacaPalavras />} />

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
export { $ };
export default App;