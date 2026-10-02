import { useEffect } from 'react';
import PadroesDeProjetos from '../components/home/PadroesDeProjetos';
import ListaProjetos from '../components/home/ListaProjetos';
import InformaticaBasica from '../components/home/InformaticaBasica';

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
              <ListaProjetos />
              <div className="text-center mt-4">
                  <a href="/boas-praticas-javascript.html">
                      <img role="button"
                          style={{ maxWidth: "992px" }}
                          title="banner-js-good-stuffs"
                          width="100%"
                          src="/img/banner-js-good-stuffs.jpg" />
                  </a>
              </div>
              <InformaticaBasica />
              <PadroesDeProjetos />            
            </div>
          </div>
        </div>
      </section>
    </main>
  </>);
}
export default Home;
