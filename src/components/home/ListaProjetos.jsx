import { Link } from 'react-router-dom';
import { useEffect, useState } from "react";
import { API_URL } from '../../App';
import dados from '../../js/aplicativos.json';
import Carousel from 'react-bootstrap/Carousel';

function ListaProjetos() {
    const [aplicativos, setAplicativos] = useState([]);
    const [index, setIndex] = useState(0);

    const handleSelect = (selectedIndex) => {
        setIndex(selectedIndex);
    };

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
        <Carousel data-bs-theme="dark" activeIndex={index} onSelect={handleSelect}>
            {
                aplicativos.map(
                    (app, index) => {
                        /*!-- Slides --*/
                        return <Carousel.Item key={index}
                            style={{
                                overflow: "auto",
                                display: "flex",
                                justifyContent: "center",
                            }} >
                                <img
                                    className="d-block w-100"
                                    src={`${API_URL}${app.imagem}`}
                                    alt={app.titulo} 
                                    style={{ height: "77dvh" }} />
                            <Carousel.Caption className="bg-dark text-light">
                                <Link to={app.url} target="_blank" role="button" className="w-auto p-4">
                                    <h1>{ app.titulo }</h1>
                                    <p>{ app.resumo }</p>
                                </Link>
                            </Carousel.Caption>
                        </Carousel.Item>
                    }
                )
            }
        </Carousel>
    )
}
export default ListaProjetos;