import { scrollDivX } from "../js/scroll-buttons";
import DestaquesCards from "./DestaquesCards";

function Secoes() {
    return (<div className="col-md-12">
            <div className="row m-auto text-light ubuntu">
                <h2 className="my-0">Seções</h2>
                <div className="d-flex w-100 justify-content-between scroll-buttons buttons" id="destaques-buttons">
                    <button className="btn btn-lg btn-success m-1 h-0 rounded-circle" id="prev" aria-label="Aria Left"
                        onClick={() => scrollDivX('destaques', -175)}>
                        <i className="fa-solid fa-arrow-left"></i>
                    </button>
                    <button className="btn btn-lg btn-success m-1 h-0 rounded-circle" id="next" aria-label="Aria Right"
                        onClick={() => scrollDivX('destaques', 175)}>
                        <i className="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <div id="destaques" className="my-0 py-0">
                <DestaquesCards />
            </div>
        </div>)
}
export default Secoes;