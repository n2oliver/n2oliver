import { Link } from 'react-router-dom';
import Carousel from 'react-bootstrap/Carousel';
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
        <Carousel>
            {
                aplicativos.map(
                    (app, index) => {
                        return <Carousel.Item key={index}
                            style={{
                                height: "77dvh",
                            }}>
                            <Link to={app.url} target="_blank" role="button">
                                <img
                                    className="d-block w-100"
                                    src={`${API_URL}${app.imagem}`}
                                    alt={app.titulo}
                                />
                                <Carousel.Caption style={{ backgroundColor: 'rgba(0, 0, 0, 0.8)' }}>
                                    <h5>{app.titulo}</h5>
                                    <p style={{ fontSize: '.7rem' }} dangerouslySetInnerHTML={{ __html: app.descricao.substring(0, 500) + '...' }} />
                                </Carousel.Caption>
                            </Link>
                        </Carousel.Item>
                    })
            }
        </Carousel>

    )
}
export default ListaAplicativos;