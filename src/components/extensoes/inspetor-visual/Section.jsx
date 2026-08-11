function Section() {
    return (
        <section className="py-5">
            <div className="container bg-secondary text-light" style={{ textShadow: "1px 2px #000000" }}>
                <div className="row align-items-center g-5">
                    <div className="col-lg-5 text-center">
                        <img src="/img/extensoes/inspetor-visual/insp.png"
                            className="img-fluid"
                            style={{ maxWidth: "250px" }}
                            alt="Inspetor Visual" />
                    </div>
                    <div className="col-lg-7 py-4">
                        <h2>Inspecione qualquer página com um clique</h2>
                        <p>
                            O Inspetor Visual permite selecionar elementos diretamente na página para visualizar informações, copiar HTML, copiar CSS ou obter ambos simultaneamente.
                            É uma ferramenta ideal para estudos, prototipação, manutenção e desenvolvimento Front-end.
                        </p>
                    </div>
                </div>
            </div>
            <div className="container bg-white">
                <h2 className="text-center mb-5">
                    Recursos
                </h2>
                <div className="row g-4">
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Copiar HTML</h4>
                                <p>
                                    Copie a estrutura HTML de qualquer elemento selecionado.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Copiar CSS</h4>
                                <p>
                                    Obtenha automaticamente os estilos CSS aplicados ao elemento.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>HTML + CSS</h4>
                                <p>
                                    Copie o HTML e o CSS em uma única ação.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Inspeção Visual</h4>
                                <p>
                                    Selecione elementos diretamente sobre a página de forma rápida e intuitiva.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Interface leve</h4>
                                <p>
                                    Sem configurações complexas. Instale e comece a utilizar imediatamente.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Privacidade</h4>
                                <p>
                                    Todo o processamento acontece localmente no navegador.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="container bg-white">
                <h2 className="text-center mb-5">
                    Ideal para
                </h2>
                <div className="row g-4">
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Desenvolvedores</h4>
                                <p>
                                    Analise rapidamente componentes HTML e CSS durante o desenvolvimento.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Designers</h4>
                                <p>
                                    Entenda como interfaces são construídas e reutilize componentes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card h-100">
                            <div className="card-body">
                                <h4>Estudantes</h4>
                                <p>
                                    Aprenda HTML e CSS explorando páginas reais em tempo real.
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