function Header() {
    return (
        <div>
            <div className="container text-center bg-secondary text-light m-auto py-5" style={{ borderRadius: "10px" }}>
                <h2>Leitor de PDF</h2>
                <p className="lead">
                    Abra documentos PDF diretamente no Google Chrome
                    e transforme o texto em voz utilizando as vozes disponíveis
                    no navegador e no sistema operacional.
                    Uma solução simples para leitura, acessibilidade e produtividade.
                </p>
                <div className="mt-4">
                    <a href="https://chromewebstore.google.com/detail/inspetor-visual-leitor-de/oflopefkkohgfgbomnghdboofepehnce"
                        className="btn btn-primary m-1">
                        <i className="fa-solid fa-store"></i>
                        Ver na Chrome Web Store
                    </a>
                    <a href="/extensoes/leitor-de-pdf/versoes/leitor-de-pdf-0.6.2.zip"
                        className="btn btn-light btn-outline-primary m-1">
                        Download
                    </a>
                </div>
            </div>
        </div>
    );
}
export default Header;