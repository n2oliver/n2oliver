import { Link } from 'react-router-dom';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Navigation, Pagination } from 'swiper/modules';
import { useEffect, useState } from "react";
import { API_URL } from '../../App';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import '../../css/swiper.css';

function ListaAplicativos() {
    const [aplicativos, setAplicativos] = useState([]);

    useEffect(() => {
        async function carregar() {
            const response = await fetch(`${API_URL}/api/aplicativos/obter.php`);
            const dados = await response.json();
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
                        return <Link to={app.url} target="_blank" role="button" className="w-auto p-4">
                            <SwiperSlide key={index}
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
                                <div className="slide-title">
                                    <div className="text-light p-4"
                                        style={{ color: 'white !important' }}
                                        dangerouslySetInnerHTML={{ __html: app.descricao }} />
                                    <img alt={app.titulo}
                                        style={{ minWidth: "50dvw", height: "fit-content" }}
                                        src={`${API_URL + app.imagem}`} />
                                </div>
                            </SwiperSlide>
                        </Link>
                    }
                )
            }
        </Swiper >
    )
}
export default ListaAplicativos;