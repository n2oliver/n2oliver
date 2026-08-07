import "../../../../css/jogos/linha-amarela/game-over.css";
function GameOver() {
    return (
        <div id="game-over" className="d-none">
            <h1>Game Over</h1>
            <div className="box-title game-over-ending mt-3">Ah, não!</div>
            <div className="box-body game-over-ending text-danger mb-3"><strong>O extraterrestres invadiram a Terra!</strong></div>
            <div className="d-flex mb-3">
                <div><button id="restart" style={{ background: "darkorange", marginTop: "20px" }}>Reiniciar</button></div>
                <div><a href='api/jogos/linha-amarela/sair.php'><button className="sair" style={{ marginTop: "20px" }}>Sair</button></a></div>
            </div>
        </div>
    )
}
export default GameOver;