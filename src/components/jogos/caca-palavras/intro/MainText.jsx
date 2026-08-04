import { Link } from "react-router-dom";

function MainText() {
    return (
        <div id="main-text" className="col-md-8 container m-auto bg-white">
            <h1>Caça-Palavras</h1>
            <p>Encontre as palavras escondidas na grade. Arraste com o dedo ou mouse para selecionar.</p>
            <Link id="jogar" to="/jogos/caca-palavras" className="btn">Jogar Agora</Link>
        </div>
    )
}
export default MainText;