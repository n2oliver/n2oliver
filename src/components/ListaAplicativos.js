import { Swiper, SwiperSlide } from 'swiper/react';
import { Navigation, Pagination } from 'swiper/modules';
import { useEffect, useState } from "react";
import { API_URL } from '../App';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import '../css/swiper.css';

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
                        return <SwiperSlide  key={index} >
                            <h2 className="slide-title">
                                <a href={app.url} target="_blank" role="button" className="btn btn-custom w-auto">{app.titulo}</a>
                            </h2>
                            <img alt={app.titulo} className="title-image img-fluid" 
                                src={`${API_URL}/src${app.imagem}`}/>
                            
                        </SwiperSlide>
                    }
                )
            }
        </Swiper>
    )
}
export default ListaAplicativos;