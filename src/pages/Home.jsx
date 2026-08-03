import '../css/home.css';
import NoticiasBar from '../components/NoticiasBar';
import DestaqueImagem from '../components/DestaqueImagem';
import VerTodasAsNoticias from '../components/VerTodasAsNoticias';
import Template from '../components/Template';

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