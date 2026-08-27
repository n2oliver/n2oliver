import '../css/home.css';
import DestaqueImagem from '../components/home/DestaqueImagem';
import Template from '../components/home/Template';
import Header from '../components/jogos/Header';
import { useEffect } from 'react';

function Jogos({ title }) {
    useEffect(() => {
        if (title) {
            document.title = title;
        }
    }, [title]);
    return (<>
        <Header />
        <main className="home m-auto col-md-12 p-0">
            <DestaqueImagem />
            <Template />
        </main>
    </>);
}

export default Jogos;