<?php
include_once(__DIR__."/../load-env.php");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: " . getenv('REACT_APP_URL'));
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

echo json_encode(
    array(
        0 => (object) [
            'id' => 1,
            'url' => '/extensoes/',
            'titulo' => 'Inspetor Visual Extensão para Navegadores (Chrome)',
            'descricao' => '<h1>Inspetor Visual</h1>
                    <p>
                    Copie o HTML e o CSS de qualquer elemento de uma página com apenas um clique. Basta selecionar o componente desejado para obter rapidamente sua estrutura HTML e seus estilos CSS, facilitando estudos, prototipação, depuração e desenvolvimento web.
                    </p>
                    <p>
                    Ideal para desenvolvedores, designers e estudantes que desejam analisar interfaces, reutilizar componentes ou acelerar a criação de projetos.
                    </p>
                    <strong>Recursos</strong>
                    <ul>
                        <li>✔ Copiar HTML de qualquer elemento da página</li>
                        <li>✔ Copiar CSS automaticamente</li>
                        <li>✔ Seleção rápida e intuitiva</li>
                        <li>✔ Funciona diretamente no navegador</li>
                        <li>✔ Interface simples e leve</li>
                        <li>✔ Aumenta a produtividade no desenvolvimento web</li>
                    </ul>
                    <strong>Indicado para</strong>
                    Desenvolvedores Front-end<br>
                    Web Designers<br>
                    Estudantes de HTML, CSS e JavaScript<br>
                    Análise de interfaces<br>
                    Prototipação rápida<br>
                    Estudos de componentes e layouts<br>
                    <p>
                    Copie elementos, analise estilos e acelere seu fluxo de trabalho sem complicações.
                    </p>

                    <div class="text-center">
                        <a href="/extensoes/">
                            <button class="btn btn-primary">
                                <strong>Acessar</strong>
                            </button>
                        </a>
                    </div>',
            'imagem' => '/img/insp.png'
        ],
        1 => (object) [
            'id' => 2,
            'url' => '/jogos/combo-memo/',
            'titulo' => 'Combo-Memo',
            'descricao' => '<h1>Combo-Memo</h1>
                <p>Um jogo da memória clássico, desenvolvido com JavaScript puro e CSS para ser leve e divertido. O projeto inclui animações dinâmicas, sistema de combos e comemorações, oferecendo uma experiência de jogo engajante e totalmente gratuita no navegador.</p>
                
                <div class="text-center">
                    <a href="/jogos/combo-memo/"><button class="btn btn-danger"><strong>Jogar agora</strong></button></a>
                </div>',
            'imagem' => '/img/combo-memo.png'
        ],
        2 => (object) [
            'id' => 3,
            'url' => '/jogos/caca-palavras/',
            'titulo' => 'Caça-Palavras',
            'descricao' => '<h1>Caça-Palavras</h1>
                <p>Venha jogar Caça-Palavras com a gente!
                No Caça-Palavras, cada partida é uma nova descoberta.
                As palavras estão escondidas entre as !letras e cabe a você encontrá-las.
                <ul>
                    <li>Simples de jogar</li>

                    <li>Bom para treinar a atenção</li>

                    <li>Perfeito para passar o tempo</li>
                </ul>
                Jogue no seu ritmo e divirta-se encontrando cada palavra escondida.
                Será que você consegue achar todas?</p>
                <div class="text-center">
                    <a href="/jogos/caca-palavras/"><button class="btn btn-danger"><strong>Jogar agora</strong></button></a>
                </div>',
            'imagem' => '/img/jogos/a.jpg'
        ],
        3 => (object) [
            'id' => 4,
            'url' => '/jogos/palavras-cruzadas/',
            'titulo' => 'Palavras Cruzadas',
            'descricao' => '<h1>Desafie-se nas Palavras Cruzadas!</h1>
                        
                <p>As <strong>Palavras Cruzadas</strong> são um clássico que exercita a mente e amplia o vocabulário — com um ritmo tranquilo e descomplicado.</p>

                    <ul>
                        <li>Teste seus conhecimentos</li>
                        <li>Aprenda palavras novas</li>
                        <li>Relaxe enquanto resolve</li>
                    </ul>

                    <p>Tem alguns minutos? Complete a grade no seu tempo e divirta-se descobrindo cada resposta.</p>
                <div class="text-center">
                    <a href="/jogos/palavras-cruzadas/"><button class="btn btn-danger"><strong>Jogar agora</strong></button></a>
                </div>',
            'imagem' => '/img/jogos/flat-crosswords.png'
        ],
        4 => (object) [
            'id' => 5,
            'url' => '/jogos/caixa-de-letras/',
            'titulo' => 'Caixa de Letras',
            'descricao' => 'Desafie seu conhecimento com este quebra-cabeça com letrinhas.',
            'imagem' => '/img/jogos/caixa-de-letras.png'
        ],
        5 => (object) [
            'id' => 6,
            'url' => 'https://whitebook.pebmed.com.br/planos',
            'titulo' => 'Decisões Clínicas',
            'descricao' => '<h1>Whitebook</h1>
                <p>O Whitebook é um sistema abrangente de conteúdo e calculadoras clínicas desenvolvido para fornecer suporte essencial aos profissionais de saúde. Com informações médicas atualizadas e ferramentas de cálculo específicas, o Whitebook é a solução ideal para médicos, enfermeiros e outros profissionais da área da saúde que buscam eficiência e precisão em seus atendimentos.</p>
                <p>Com o Whitebook, os profissionais de saúde têm acesso rápido a informações essenciais e ferramentas práticas, otimizando o tempo e aprimorando a qualidade do atendimento. É uma ferramenta indispensável para a prática médica moderna.</p>
                
                <div class="text-center">
                    <a href="https://whitebook.pebmed.com.br/planos"><button class="btn btn-primary"><strong>Acessar</strong></button></a>
                </div>',
            'imagem' => '/img/calculadoras-pediatricas.jpg'
        ],
        6 => (object) [
            'id' => 7,
            'url' => '/calculadora/',
            'titulo' => 'Calculadora',
            'descricao' => '<h1>Calculadora</h1>
                <p>
                A Calculadora é uma ferramenta desenvolvida para auxiliar na realização de cálculos matemáticos com rapidez e precisão. Ideal para tarefas do dia a dia, estudos e atividades profissionais, ela permite efetuar operações de forma prática, proporcionando mais agilidade e conveniência na resolução de contas e expressões numéricas.
                </p>

                <div class="text-center">
                    <a href="/calculadora/">
                        <button class="btn btn-primary">
                            <strong>Acessar</strong>
                        </button>
                    </a>
                </div>',
            'imagem' => '/img/calc.png'
        ],
        7 => (object) [
            'id' => 8,
            'url' => '/lojavirtual/',
            'titulo' => 'Oliv3r Store - Loja Virtual',
            'descricao' => '<h1>Oliv3r Store - Loja Virtual</h1>
                <p>A Oliv3r Store é um espaço de afiliados onde apresento uma curadoria pessoal de produtos que uso e recomendo. O foco é oferecer valor real, com descrições originais e uma seleção cuidadosa de tecnologia, livros e cursos, alinhados aos temas de desenvolvimento e bem-estar do site.</p>
                
                <div class="text-center">
                    <a href="/lojavirtual/"><button class="btn btn-primary"><strong>Acessar</strong></button></a>
                </div>',
            'imagem' => '/img/loja_virtual.jpg'
        ],
    )
);