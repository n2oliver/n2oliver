import '../css/home.css';
import DestaqueImagem from '../components/home/DestaqueImagem';
import Template from '../components/home/Template';
import Header from "../components/jogos/Header";

function Home() {
    return (<>
        <main className="home m-auto col-md-12 p-0">
            <Header />
            <DestaqueImagem />
            <Template />
        </main>
    </>);
}

export default Home;