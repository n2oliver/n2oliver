function Logo() {
    return (
        <div className="logo">
            <div id="logo" style={{ margin: "0 auto", textAlign: "center", position: "relative", left: 0, right: 0 }} className="d-inline-flex align-items-center justify-content-around presentation text-warning w-100">
                <div>
                    <a href="/jogos/linha-amarela/jogo"><button className="button" style={{ background: "limegreen" }}>Novo jogo</button></a>
                    <a href="/jogos/linha-amarela/"><button className="button" style={{ background: "blue" }}>Voltar</button></a>
                </div>
            </div>
        </div>
    );
}
export default Logo;