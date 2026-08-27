import { useEffect } from 'react';
import ListaAplicativos from '../components/home/ListaAplicativos';

function Projetos({ title }) {
  useEffect(() => {
    if (title) {
      document.title = title;
    }
  }, [title]);

  return (
    <main className="aplicativos-page">
      <div className="container py-4 d-block bg-white" style={{ backgroundImage: "url('/img/space.png')", backgroundSize: "cover", backgroundPosition: "center" }}>
        <ListaAplicativos />
      </div>
    </main>);
}
export default Projetos;