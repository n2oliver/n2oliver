import Header from "../../../../components/jogos/palavras-cruzadas/jogar/Header";
import Main from "../../../../components/jogos/palavras-cruzadas/jogar/Main";
import Message from "../../../../components/jogos/palavras-cruzadas/jogar/Message";
import Actions from "../../../../components/jogos/palavras-cruzadas/jogar/Actions";
import "../../../../css/jogos/palavras-cruzadas/jogar/style.module.css";
function PalavrasCruzadas() {
    return (
        <>
            <Header />
            <Actions />
            <Main />
            <Message />
        </>
    )
}

export default PalavrasCruzadas;