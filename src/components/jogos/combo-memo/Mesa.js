import { useEffect } from "react";
import { handleCardClick } from "../../../js/jogos/combo-memo/platform/platform";
import { embaralhar } from "../../../js/jogos/combo-memo/card/card";

function Mesa() {
    useEffect(() => {
        embaralhar();
    });
    return (<div className="mesa">
        <div className="platform col-sm-10 m-auto d-grid" style={{ paddingTop: "32px",  gridTemplateColumns: "auto auto auto auto" }}>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
            <div className="card animar sem-fundo" onClick={handleCardClick}></div>
        </div>
    </div>)
}
export default Mesa;