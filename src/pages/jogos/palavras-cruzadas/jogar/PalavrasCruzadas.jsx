import Header from "../../../../components/jogos/palavras-cruzadas/jogar/Header";
import Main from "../../../../components/jogos/palavras-cruzadas/jogar/Main";
import Message from "../../../../components/jogos/palavras-cruzadas/jogar/Message";
import Actions from "../../../../components/jogos/palavras-cruzadas/jogar/Actions";
import "../../../../css/jogos/palavras-cruzadas/jogar/style.css";
import { useEffect } from "react";
function PalavrasCruzadas({ title }) {
    useEffect(() => {
        if (title) {
            document.title = title;
        }
    }, [title]);
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