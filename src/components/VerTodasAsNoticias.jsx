import { Link } from "react-router-dom";

function VerTodasAsNoticias() {
    return (
        <div className="container m-auto p-0 mt-1 col-md-10 d-flex justify-content-end">
            <Link to="/noticias"><button className="btn btn-primary">Ver todas as notícias</button></Link>
        </div>
    );
}
export default VerTodasAsNoticias;