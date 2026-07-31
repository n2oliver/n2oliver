import ListaAplicativos from '../components/ListaAplicativos';

function Aplicativos() {

  return (
    <main className="aplicativos-page">
      <div className="container py-4 d-block bg-white">
        <h1>Aplicativos</h1>
        {/*!-- Additional required wrapper --*/}
        <ListaAplicativos />
      </div>
    </main>);
}
export default Aplicativos;