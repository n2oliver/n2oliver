function Points() {
    return (
        <div id="your-points-box" className="row" style={{ display: "none" }}>
            <div id="div-ranking" className="col-md-8 presentation text-white box-title title-ranking mt-3">
                <img alt="linhaamarela" width="100" src="/img/jogos/linha-amarela/logo-linhaamarela.jpg"
                    style={{
                        float: "right",
                        position: "relative",
                        top: "6px"
                    }} />
                Sua pontuação
                <table id="your-points" className="table table-center">
                    <thead>
                        <tr>
                            <th>Posição</th><th>Usuário</th><th>Pontuação</th>
                        </tr>
                    </thead>
                    <tbody id="pontuacao">
                    </tbody>
                </table>
            </div>
        </div>
    );
}
export default Points;