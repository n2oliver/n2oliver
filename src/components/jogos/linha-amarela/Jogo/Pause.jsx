import ListaJogos from "../../../ListaJogos";

function Pause() {
    return (
        <>
            <div id="qr-code" style={{ color: "white", zIndex: "9999", margin: "0 auto" }} className="qr-code d-none">
                <div className="container" style={{
                    display: "flex",
                    backgroundColor: "rgba(33,33,33,.5)",
                    height: "fit-content",
                    width: "100%",
                    padding: 0,
                    margin: 0,
                    zIndex: 21000000,
                    top: "100px",
                    overflowX: "scroll"
                }}>
                    <div className="col-md-6" style={{
                        display: "flex",
                        height: "fit-content",
                        justifyContent: "center",
                        position: "sticky",
                        left: "0px"
                    }}>
                        <div>
                            <div>Aceitamos doações:</div>
                            <div>Chave PIX:</div>
                            <div><img alt="qr-code" id="qr-code" src="/img/jogos/linha-amarela/qr-code.jpeg" loading="lazy" /></div>
                            <div>suporte@n2oliver.com</div>
                        </div>
                        <div>
                            <div>Para sair clique no<br />botão abaixo</div>
                            <img alt="logout" src="/img/jogos/linha-amarela/logout.png" width="100" height="100" className="sair" loading="lazy" />
                        </div>
                    </div>
                    <div className="col-md-6" style={{ height: "fit-content" }}>
                        <div className="d-flex justify-content-start col-md-10 m-auto text-light mt-2" style={{ fontFamily: "Ubuntu" }}>
                            <strong>
                                <h3 style={{ width: "fit-content", position: "sticky", left: "0px", textAlign: "left" }}>Você também pode gostar de</h3>
                                <div id="jogos" className="col-md-10 m-auto d-flex justify-content-start">
                                    <ListaJogos />
                                </div>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pause" className="pause unselectable rotate-center container bg-dark" style={{ display: "none" }}>Pause</div>
        </>
    )
}
export default Pause;