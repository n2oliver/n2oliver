<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Inspetor Visual | N2Oliver</title>

<meta name="description" content="Inspecione elementos HTML, copie HTML e CSS com apenas um clique utilizando o Inspetor Visual para Google Chrome.">

<link rel="icon" type="image/png" href="./icons/insp.png">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link rel="stylesheet" href="../inspetor.css">

<style>
section {
    background-image: url(../bg-complex-green.png);
    background-position: center;
    background-attachment: fixed;
}

.container {
    background-color: light;
    padding: 20px;
    border-radius: 10px;
    color: darkslategray;
    font-weight: 700;
}
</style>

</head>

<body>

<header class="py-5">

<div class="container text-center">

<h1>Inspetor Visual</h1>

<p class="lead">
Inspecione elementos HTML, copie HTML e CSS e analise páginas da web com rapidez diretamente no Google Chrome.
Uma ferramenta leve e prática para desenvolvedores, designers e estudantes.
</p>

<div class="mt-4">

<a href="https://chromewebstore.google.com/detail/kddpnplompfhboemlbfankhjpklalaoi"
class="btn btn-primary"
target="_blank">
<i class="fa-solid fa-store"></i>
Ver na Chrome Web Store
</a>

<a href="/extensoes/inspetor-visual/versoes/inspetor-visual-0.5.5.zip"
class="btn btn-outline-primary">
Download
</a>

</div>

</div>

</header>

<section class="py-5">

<div class="container bg-secondary text-light" style="text-shadow: 1px 2px #000000">

<div class="row align-items-center g-5">

<div class="col-lg-5 text-center">

<img src="../icons/insp.png"
class="img-fluid"
style="max-width:250px"
alt="Inspetor Visual">

</div>

<div class="col-lg-7 py-4">

<h2>Inspecione qualquer página com um clique</h2>

<p>
O Inspetor Visual permite selecionar elementos diretamente na página para visualizar informações, copiar HTML, copiar CSS ou obter ambos simultaneamente.
É uma ferramenta ideal para estudos, prototipação, manutenção e desenvolvimento Front-end.
</p>

</div>

</div>

</div>

<div class="container bg-white">

<h2 class="text-center mb-5">
Recursos
</h2>

<div class="row g-4">

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Copiar HTML</h4>

<p>
Copie a estrutura HTML de qualquer elemento selecionado.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Copiar CSS</h4>

<p>
Obtenha automaticamente os estilos CSS aplicados ao elemento.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>HTML + CSS</h4>

<p>
Copie o HTML e o CSS em uma única ação.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Inspeção Visual</h4>

<p>
Selecione elementos diretamente sobre a página de forma rápida e intuitiva.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Interface leve</h4>

<p>
Sem configurações complexas. Instale e comece a utilizar imediatamente.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Privacidade</h4>

<p>
Todo o processamento acontece localmente no navegador.
</p>

</div>

</div>

</div>

</div>

</div>

<div class="container bg-white">

<h2 class="text-center mb-5">
Ideal para
</h2>

<div class="row g-4">

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Desenvolvedores</h4>

<p>
Analise rapidamente componentes HTML e CSS durante o desenvolvimento.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Designers</h4>

<p>
Entenda como interfaces são construídas e reutilize componentes.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

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

<section class="py-5">

<div class="container text-center bg-white">

<h2>Instalação manual</h2>

<p>
Caso prefira, você também pode instalar a extensão utilizando o modo desenvolvedor do Google Chrome.
</p>

<div class="d-flex justify-content-center flex-column">
<h3 id="instalar-como-desenvolvedor">Instalar como desenvolvedor</h3>
<p>Consiste em instalar diretamente do arquivo sem precisar baixar da loja de aplicativos.</p>
<div class="alert alert-warning col-md-6 m-auto"><strong>Aviso!</strong> Esteja ciente de que não nos responsabilizamos por qualquer dano ou mau uso decorrente do download do arquivo ou da instalação no navegador do usuário.</div>
<ul style="list-style-type: none">
    <strong>Como instalar</strong>
    <li>1. <strong>Baixe</strong> o arquivo zip contido no link 
        <a href="/extensoes/inspetor-visual/versoes/inspetor-visual-1.0.0.zip">
            baixar agora (v1.0.0)
        </a>;</li>
    <li>2. <strong>Extraia</strong> o arquivo para um diretório do seu computador;</li>
    <li>3. Abra o navegador e <strong>ative o 'Modo desenvolvedor'</strong> ou algo semelhante;</li>
    <li>4. <strong>Vá em Gerenciar extensões</strong> pelo menu do navegador;</li>
    <li>5. Clique em <strong>Carregar sem compactação</strong></li>
    <li>6. <strong>Selecione o diretório</strong> e confirme a escolha</li>
    <li><strong>Pronto!</strong> A extensão está instalada</li>
</ul>
</div>
<a href="/extensoes/inspetor-visual/versoes/inspetor-visual-0.5.5.zip"
class="btn btn-primary">
Baixar versão 0.5.5
</a>

</div>

</section>

<footer class="py-4 text-center">

<div class="container">

<strong>Inspetor Visual</strong>

<p class="mt-3">
Ferramenta desenvolvida para facilitar a inspeção de elementos HTML e CSS diretamente no navegador.
</p>

<p>
© 2026 N2Oliver
</p>

</div>

</footer>

</body>
</html>