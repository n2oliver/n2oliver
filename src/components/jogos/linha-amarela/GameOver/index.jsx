function GameOver() {
    return (
        <div id="game-over" className="row" style={{ display: "none" }}>
            <div className="col-md-8 presentation text-warning box-title game-over-ending mt-3">
                Ah, não!
                <strong>O extraterrestres invadiram a Terra!</strong>
            </div>
        </div>
    );
}
export default GameOver;