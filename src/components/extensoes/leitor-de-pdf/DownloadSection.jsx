function DownloadSection() {
    return (
        <section className="py-5">
            <div className="container text-center bg-white py-5">
                <h2>Instalação manual</h2>
                <p>
                    Caso prefira, você também pode instalar a extensão utilizando o modo desenvolvedor do Google Chrome.
                </p>
                <div className="d-flex justify-content-center flex-column">
                    <h3 id="instalar-como-desenvolvedor">Instalar como desenvolvedor</h3>
                    <p>Consiste em instalar diretamente do arquivo sem precisar baixar da loja de aplicativos.</p>
                    <div className="alert alert-warning col-md-6 m-auto"><strong>Aviso!</strong> Esteja ciente de que não nos responsabilizamos por qualquer dano ou mau uso decorrente do download do arquivo ou da instalação no navegador do usuário.</div>
                    <ul style={{ listStyleType: "none" }}>
                        <strong>Como instalar</strong>
                        <li>1. <strong>Baixe</strong> o arquivo zip contido no link
                            <a href="/download/extensoes/leitor-de-pdf/versoes/leitor-de-pdf-0.6.2.zip">
                                baixar agora (v0.6.2)
                            </a>;</li>
                        <li>2. <strong>Extraia</strong> o arquivo para um diretório do seu computador;</li>
                        <li>3. Abra o navegador e <strong>ative o 'Modo desenvolvedor'</strong> ou algo semelhante;</li>
                        <li>4. <strong>Vá em Gerenciar extensões</strong> pelo menu do navegador;</li>
                        <li>5. Clique em <strong>Carregar sem compactação</strong></li>
                        <li>6. <strong>Selecione o diretório</strong> e confirme a escolha</li>
                        <li><strong>Pronto!</strong> A extensão está instalada</li>
                    </ul>
                </div>
                <a href="/download/extensoes/leitor-de-pdf/versoes/leitor-de-pdf-0.6.2.zip"
                    className="btn btn-primary">
                    Baixar versão 0.6.2
                </a>
            </div>
        </section>
    )
}
export default DownloadSection;