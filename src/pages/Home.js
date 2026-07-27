import React from 'react';
import '../css/home.css';
import NoticiasBar from '../components/NoticiasBar.js';
import DestaqueImagem from '../components/DestaqueImagem.js';
import VerTodasAsNoticias from '../components/VerTodasAsNoticias.js';

function Home() {
    return (<>
        <main className="w-100 m-auto col-md-12 p-0">
            <DestaqueImagem />
        </main>
        <NoticiasBar />
        <VerTodasAsNoticias />
    </>);
}

export default Home;