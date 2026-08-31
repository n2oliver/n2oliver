import { useEffect } from 'react';
import PadroesDeProjetos from '../components/home/PadroesDeProjetos';
import ListaProjetos from '../components/home/ListaProjetos';

function Home({ title }) {
  useEffect(() => {
    if (title) {
      document.title = title;
    }
  }, [title]);
  return (<>
    <main className="w-100 m-auto col-md-12 p-0">
      <section id="destaque-imagem" className="m-auto n2oliver-jogos d-flex flex-column justify-content-center"
        style={{ width: "stretch", maxWidth: "94dvw" }}
        alt="">

        <div className="container m-auto p-0" style={{ backgroundColor: "rgba(0, 0, 0, .4)", maxWidth: "94dvw" }}>
          <div>
            <div className="justify-content-start text-start col-md-10 m-auto text-light mt-2 ubuntu w-100">
              <strong>
                  <h1 className="text-success m-0" style={{ WebkitTextStroke: "1px #fff",fontSize: "3rem", whiteSpace: "normal" }}>QUALIDADE <i className="fa fa-check"></i> É</h1>
                  <h2 className="my-0 ubuntu">A NOSSA <span className="text-danger"  style={{ WebkitTextStroke: "1px #fff" }}>ENERGIA</span></h2>
              </strong>
              <PadroesDeProjetos />
              <ListaProjetos />
            </div>
          </div>
        </div>
      </section>
    </main>
  </>);
}
export default Home;
