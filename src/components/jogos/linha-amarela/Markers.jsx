import "../../../css/jogos/linha-amarela/markers.module.css";

function Markers() {
    return (<div className="menu-item markers">
        <div className="presentation-container unselectable">Nivel: <span id="levels-counter">1</span></div>
        <div className="presentation-container unselectable"><span id="vidas">
                <div className="heart"></div>
                <div className="heart"></div>
                <div className="heart"></div>
            </span></div>
    </div>);
}
export default Markers;