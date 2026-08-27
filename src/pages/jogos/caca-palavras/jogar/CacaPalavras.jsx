import { useEffect } from "react";
import Header from "../../../../components/jogos/caca-palavras/jogar/Header";
import Main from "../../../../components/jogos/caca-palavras/jogar/Main";
import Message from "../../../../components/jogos/caca-palavras/jogar/Message";
import "../../../../css/jogos/caca-palavras/jogar/style.css";
function CacaPalavras({ title }) {
    useEffect(() => {
        if (title) {
            document.title = title;
        }
    }, [title]);
    return (
        <>
            <Header />
            <Main />
            <Message />
        </>
    )
}

export default CacaPalavras;