function Section() {
    return (
        <section>
            <div className="container bg-light text-light m-auto my-2" style={{ borderRadius: "10px", padding: "20px" }}>
                <div className="row g-4">
                    <div className="col-lg-6">
                        <div className="card h-100 shadow-sm">
                            <div className="card-body">
                                <h2 className="bg-white p-2 mb-0">Inspetor Visual</h2>
                                <div className="d-flex justify-content-center" style={{ backgroundColor: "currentColor" }}>
                                    <img src="/img/extensoes/inspetor-visual/insp.png" className="col-md-6" />
                                </div>
                                <p className="bg-white rounded-bottom p-2 mb-0">
                                    Inspecione qualquer elemento de uma página da web e copie HTML e CSS com apenas um clique.
                                    Ideal para desenvolvedores, designers e estudantes.
                                </p>
                                <div className="d-flex bg-white rounded">
                                    <div>
                                        <ul>
                                            <li>Copiar HTML</li>
                                            <li>Copiar CSS</li>
                                            <li>Copiar HTML + CSS</li>
                                            <li>Inspeção visual em tempo real</li>
                                            <li>Interface leve</li>
                                        </ul>
                                    </div>
                                    <div className="w-100 align-content-end text-center">
                                        <a href="/extensoes/inspetor-visual/" className="btn btn-primary gap-3 m-1" style={{ width: "fit-content" }}>
                                            Saiba mais
                                        </a>
                                        <a href="/download/extensoes/inspetor-visual/versoes/inspetor-visual-1.0.8.zip"
                                            className="btn btn-outline-primary m-1" style={{ width: "fit-content" }}>
                                            Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-6">
                        <div className="card h-100 shadow-sm">
                            <div className="card-body">
                                <h2 className="bg-white p-2 mb-0">Leitor de PDF</h2>
                                <div className="d-flex justify-content-center" style={{ backgroundColor: "currentColor" }}>
                                    <img src="/img/extensoes/leitor-de-pdf/insp-pdf.png" className="col-md-6" />
                                </div>
                                <p className="bg-white rounded-bottom p-2 mb-0">
                                    Abra documentos PDF diretamente no navegador e utilize leitura em voz alta para tornar a leitura mais prática e acessível.
                                </p>
                                <div className="d-flex bg-white rounded">
                                    <div>
                                        <ul>
                                            <li>Abertura de PDFs</li>
                                            <li>Leitura em voz alta</li>
                                            <li>Escolha de vozes</li>
                                            <li>Compatível com Speech Synthesis</li>
                                            <li>Interface simples</li>
                                        </ul>
                                    </div>
                                    <div className="w-100 align-content-end text-center">
                                        <a href="/extensoes/leitor-de-pdf/" className="btn btn-primary m-1" style={{ width: "fit-content" }}>
                                            Saiba mais
                                        </a>
                                        <a href="/download/extensoes/leitor-de-pdf/versoes/leitor-de-pdf-0.6.2.zip"
                                            className="btn btn-outline-primary m-1" style={{ width: "fit-content" }}>
                                            Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
export default Section;