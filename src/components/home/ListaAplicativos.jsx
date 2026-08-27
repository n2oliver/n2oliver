import { Link } from 'react-router-dom';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Navigation, Pagination } from 'swiper/modules';
import { useEffect, useState } from "react";
import { API_URL } from '../../App';
import dados from '../../js/aplicativos.json';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import '../../css/swiper.css';

function ListaAplicativos() {
    const [aplicativos, setAplicativos] = useState([]);

    useEffect(() => {
        async function carregar() {
            setAplicativos(dados);
        }
        carregar();
    }, []);

    if (!aplicativos || (aplicativos && !aplicativos.length)) {
        return;
    }
    return (
        <Swiper
            modules={[Navigation, Pagination]}
            direction="horizontal"
            loop={true}
            navigation
            pagination={{ clickable: true }}
            style={{
                display: "flex",
                alignItems: "center"
            }}>
            {
                aplicativos.map(
                    (app, index) => {
                        /*!-- Slides --*/
                        return <SwiperSlide key={index}
                            style={{
                                backgroundImage: `url(${API_URL}${app.imagem})`,
                                backgroundSize: "cover",
                                backgroundPosition: "center",
                                backgroundAttachment: "fixed",
                                overflow: "auto",
                                height: "77dvh",
                                display: "flex",
                                justifyContent: "center",
                            }} >
                            <Link to={app.url} target="_blank" role="button">
                                <div className="slide-title" style={{ minHeight: "100%" }}>
                                    <div className="text-light p-4"
                                        style={{ color: 'white !important' }}
                                        dangerouslySetInnerHTML={{ __html: app.descricao }} />
                                    <img alt={app.titulo}
                                        style={{ minWidth: "50dvw", height: "fit-content" }}
                                        src={`${API_URL + app.imagem}`} />
                                </div>
                            </Link>
                        </SwiperSlide>
                    }
                )
            }
        </Swiper >
    )
}
export default ListaAplicativos;