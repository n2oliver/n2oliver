import { useEffect, useState } from 'react';
import PadroesDeProjetos from '../components/home/PadroesDeProjetos';
import InformaticaBasica from '../components/home/InformaticaBasica';
import VideoPlayer from '../components/VideoPlayer';

function Video({ title }) {
  const [video, setVideo] = useState("https://www.youtube.com/embed/HK23gcWKUXU?si=OJpGTN5E-OjhkfAk")
  const [show, setShow] = useState(true);
  
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
          <div style={{ height: "550px" }} className="col-6 m-auto p-0">
            <VideoPlayer video={typeof video !== 'undefined' ? video : ""} />
          </div>
          <div style={{ height: "550px", overflowY: "auto" }} className="col-6 m-auto p-0">
            <InformaticaBasica />
            <PadroesDeProjetos />
          </div>
        </div>
      </section>
    </main>
  </>);
}
export default Video;