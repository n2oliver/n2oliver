function Header() {
    return (
        <div>
            <div className="container text-center m-auto my-2">
                <h2>Inspetor Visual</h2>
                <p className="lead">
                    Inspecione elementos HTML, copie HTML e CSS
                    e analise páginas da web com rapidez diretamente no Google Chrome.
                    Uma ferramenta leve e prática para desenvolvedores, designers e estudantes.
                </p>
                <div className="mt-4">
                    <a href="https://chromewebstore.google.com/detail/kddpnplompfhboemlbfankhjpklalaoi"
                        className="btn btn-primary m-1"
                        target="_blank">
                        <i className="fa-solid fa-store"></i>
                        Ver na Chrome Web Store
                    </a>
                    <a href="/extensoes/inspetor-visual/versoes/inspetor-visual-1.0.8.zip"
                        className="btn btn-outline-primary m-1">
                        Download
                    </a>
                </div>
            </div>
        </div >
    );
}
export default Header;