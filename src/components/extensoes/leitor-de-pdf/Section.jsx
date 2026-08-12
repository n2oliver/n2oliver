import Header from "./Header";

function Section() {
    return (
        <section className="pt-5">
            <Header />
            <div className="container bg-white">
                <div className="row align-items-center g-5">
                    <div className="col-lg-5 text-center">
                        <img src="/img/extensoes/leitor-de-pdf/insp-pdf.png"
                            className="img-fluid"
                            style={{ maxWidth: "250px" }}
                            alt="Leitor de PDF" />
                    </div>
                    <div className="col-lg-7 py-4">
                        <h2>Leia documentos PDF com mais conforto</h2>
                        <p>
                            O Leitor de PDF permite abrir documentos diretamente no navegador e utilizar leitura em voz alta para acompanhar o conteúdo sem precisar ler continuamente na tela. Escolha a voz desejada, controle a reprodução e torne sua leitura mais confortável e acessível.
                        </p>
                    </div>
                </div>
            </div>
            <div className="container bg-white py-5">
                <h2 className="text-center mb-5">
                    Recursos
                </h2>
                <div className="row g-4">
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Abertura de PDFs</h4>
                                <p>
                                    Abra documentos PDF diretamente no navegador.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Leitura em voz alta</h4>
                                <p>
                                    Converta o texto do PDF em áudio utilizando a API Speech Synthesis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Escolha de vozes</h4>
                                <p>
                                    Utilize qualquer voz instalada no navegador ou no sistema operacional.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Controle da reprodução</h4>
                                <p>
                                    Inicie, pause, retome ou interrompa a leitura sempre que desejar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Acessibilidade</h4>
                                <p>
                                    Ideal para pessoas com baixa visão, dislexia, TDAH ou que preferem ouvir o conteúdo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Interface simples</h4>
                                <p>
                                    Leve, intuitiva e pronta para uso sem configurações complexas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="container bg-white py-5">
                <h2 className="text-center mb-5">
                    Ideal para
                </h2>
                <div className="row g-4">
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Estudantes</h4>
                                <p>
                                    Ouça apostilas, artigos e materiais didáticos enquanto acompanha o texto.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Profissionais</h4>
                                <p>
                                    Leia contratos, relatórios e documentos de forma mais confortável.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Acessibilidade</h4>
                                <p>
                                    Facilite o acesso ao conteúdo para pessoas com dificuldades de leitura ou deficiência visual.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
export default Section;