import { useEffect } from "react";
import Header from "../../../components/jogos/combo-memo/Header";

function ComboMemoIntro({ title }) {
    useEffect(() => {
        if (title) {
            document.title = title;
        }
    }, [title]);
    return (<Header />)
}
export default ComboMemoIntro;