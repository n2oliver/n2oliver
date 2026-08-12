import { Link } from "react-router-dom";
import { scrollDivX } from "../../js/scroll-buttons";
import RecentesCards from "./RecentesCards";

function Recentes() {
    return (<div id="jogos-recentes" className="d-flex justify-content-center col-md-5">
            <div className="w-100 ubuntu">
                <div className="d-flex w-100 justify-content-between buttons" id="buttons">
                    <button className="btn btn-lg btn-success m-1 h-0 rounded-circle" id="prev" aria-label="Aria Left"
                        onClick={() => scrollDivX('lista', -175)}>
                        <i className="fa-solid fa-arrow-left"></i>
                    </button>
                    <button className="btn btn-lg btn-success m-1 h-0 rounded-circle" id="next" aria-label="Aria Right"
                        onClick={() => scrollDivX('lista', 175)}>
                        <i className="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
                <strong><h2 className="my-0">Jogos recentes</h2></strong>
                <div id="lista" className="my-0 py-0">
                    <RecentesCards />
                </div>
                <div className="m-auto p-0 mt-1 mx-0 d-flex justify-content-end"><Link to="/jogos.php"><button className="btn btn-primary">Ver todos</button></Link></div>
            </div>
        </div>)
}
export default Recentes;