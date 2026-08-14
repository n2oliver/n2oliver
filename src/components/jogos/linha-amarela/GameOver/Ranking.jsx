function Ranking() {
    return (
        <div class="row">
            <div id="div-ranking" class="col-md-8 presentation text-white box-title title-ranking mt-3">Recordes
                <table id="all-points" class="table">
                    <thead>
                        <tr>
                            <th>Posição</th><th>Usuário</th><th>Pontuação</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="col-md-8">
                <nav aria-label="Page navigation example" class="col-md-12 d-inline-flex p-2 justify-content-center">
                    <ul id="pagination" class="pagination">
                    </ul>
                </nav>
            </div>
        </div>
    );
}
export default Ranking;