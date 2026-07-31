import React from 'react';
import { scrollDivX } from '../js/scroll-buttons.js';
import GameNoticias from './GameNoticias.js';

function NoticiasBar() {
    return (
        <div className="m-auto">
            <div className="m-auto row justify-content-around"></div>
            <div className="col-md-12">
                <div className="row m-auto text-light ubuntu">
                    <h2>Notícias</h2>

                    <div className="d-flex m-auto justify-content-between buttons">
                        <button className="btn btn-lg btn-success m-1 h-0 rounded-circle" id="prev" aria-label="Aria Left"
                            onClick={() => scrollDivX('game-noticias', -175)}>
                            <i className="fa-solid fa-arrow-left"></i>
                        </button>
                        <button className="btn btn-lg btn-success m-1 h-0 rounded-circle" id="next" aria-label="Aria Right"
                            onClick={() => scrollDivX('game-noticias', 175)}>
                            <i className="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <GameNoticias />
            </div>
        </div>
    );
}
export default NoticiasBar;