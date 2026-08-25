import ListaJogos from '../components/home/ListaJogos';

function Jogos() {
  return (<>
    <main className="w-100 m-auto col-md-12 p-0">
      <section id="destaque-imagem" className="w-100 m-auto n2oliver-jogos d-flex flex-column justify-content-center"
        alt="">

        <div className="container m-auto" style={{ backgroundColor: "rgba(0, 0, 0, .4)" }}>
          <div id="jogos-recentes" className="d-flex justify-content-center">
            <div className="justify-content-start col-md-10 m-auto text-light mt-2 ubuntu w-100">
              <strong>
                <h2 className="my-0">Todos Os Jogos</h2>
              </strong>
              <div id="lista" className="d-flex my-0 py-0">
                <ListaJogos />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </>);
}
export default Jogos;
