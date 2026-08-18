import '../css/home.css';
import DestaqueImagem from '../components/home/DestaqueImagem';
import Template from '../components/home/Template';

function Home() {
    return (<>
        <main className="home m-auto col-md-12 p-0">
            <DestaqueImagem />
            <Template />
        </main>
    </>);
}

export default Home;