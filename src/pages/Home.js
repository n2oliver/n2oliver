import React from 'react';
import '../css/home.css';
import NoticiasBar from '../components/NoticiasBar.js';
import DestaqueImagem from '../components/DestaqueImagem.js';
import VerTodasAsNoticias from '../components/VerTodasAsNoticias.js';
import Template from '../components/Template.js';

function Home() {
    return (<>
        <main className="home m-auto col-md-12 p-0">
            <DestaqueImagem />
            <Template />
        </main>
        <NoticiasBar />
        <VerTodasAsNoticias />
    </>);
}

export default Home;