<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Leitor de PDF | N2Oliver</title>

<meta name="description" content="Abra documentos PDF diretamente no Google Chrome e utilize leitura em voz alta para tornar a leitura mais prática e acessível.">

<link rel="icon" type="image/png" href="./icons/insp-pdf.png">

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
    border-radius: 10px;
    color: darkslategray;
    font-weight: 700;
}
</style>

</head>

<body>

<header class="bg-dark">

<div class="container text-center bg-secondary text-light m-auto py-5" style="border-radius: 10px;">

<h1>Leitor de PDF</h1>

<p class="lead">
Abra documentos PDF diretamente no Google Chrome e transforme o texto em voz utilizando as vozes disponíveis no navegador e no sistema operacional.
Uma solução simples para leitura, acessibilidade e produtividade.
</p>

<div class="mt-4">

<a href="https://chromewebstore.google.com/detail/inspetor-visual-leitor-de/oflopefkkohgfgbomnghdboofepehnce"
class="btn btn-primary">
<i class="fa-solid fa-store"></i>
Ver na Chrome Web Store
</a>

<a href="/extensoes/leitor-de-pdf/versoes/leitor-de-pdf-0.5.2.zip"
class="btn btn-light btn-outline-primary">
Download
</a>

</div>

</div>

</header>

<section class="py-5">

<div class="container bg-white">

<div class="row align-items-center g-5">

<div class="col-lg-5 text-center">

<img src="../icons/insp-pdf.png"
class="img-fluid"
style="max-width:250px"
alt="Leitor de PDF">

</div>

<div class="col-lg-7 py-4">

<h2>Leia documentos PDF com mais conforto</h2>

<p>
O Leitor de PDF permite abrir documentos diretamente no navegador e utilizar leitura em voz alta para acompanhar o conteúdo sem precisar ler continuamente na tela. Escolha a voz desejada, controle a reprodução e torne sua leitura mais confortável e acessível.
</p>

</div>

</div>

</div>

<div class="container bg-white py-5">

<h2 class="text-center mb-5">
Recursos
</h2>

<div class="row g-4">

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Abertura de PDFs</h4>

<p>
Abra documentos PDF diretamente no navegador.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Leitura em voz alta</h4>

<p>
Converta o texto do PDF em áudio utilizando a API Speech Synthesis.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Escolha de vozes</h4>

<p>
Utilize qualquer voz instalada no navegador ou no sistema operacional.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Controle da reprodução</h4>

<p>
Inicie, pause, retome ou interrompa a leitura sempre que desejar.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Acessibilidade</h4>

<p>
Ideal para pessoas com baixa visão, dislexia, TDAH ou que preferem ouvir o conteúdo.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Interface simples</h4>

<p>
Leve, intuitiva e pronta para uso sem configurações complexas.
</p>

</div>

</div>

</div>

</div>

</div>

<div class="container bg-white py-5">

<h2 class="text-center mb-5">
Ideal para
</h2>

<div class="row g-4">

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Estudantes</h4>

<p>
Ouça apostilas, artigos e materiais didáticos enquanto acompanha o texto.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h4>Profissionais</h4>

<p>
Leia contratos, relatórios e documentos de forma mais confortável.
</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

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

<section class="py-5">

<div class="container text-center bg-white py-5">

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
        <a href="/extensoes/inspetor-visual/versoes/inspetor-visual-0.5.4.zip">
            baixar agora (v0.5.4)
        </a>;</li>
    <li>2. <strong>Extraia</strong> o arquivo para um diretório do seu computador;</li>
    <li>3. Abra o navegador e <strong>ative o 'Modo desenvolvedor'</strong> ou algo semelhante;</li>
    <li>4. <strong>Vá em Gerenciar extensões</strong> pelo menu do navegador;</li>
    <li>5. Clique em <strong>Carregar sem compactação</strong></li>
    <li>6. <strong>Selecione o diretório</strong> e confirme a escolha</li>
    <li><strong>Pronto!</strong> A extensão está instalada</li>
</ul>
</div>
<a href="/extensoes/leitor-de-pdf/versoes/leitor-de-pdf-0.5.2.zip"
class="btn btn-primary">
Baixar versão 0.5.2
</a>

</div>

</section>

<footer class="py-4 text-center">

<div class="container">

<strong>Leitor de PDF</strong>

<p class="mt-3">
Ferramenta desenvolvida para abrir documentos PDF e realizar leitura em voz alta diretamente no Google Chrome.
</p>

<p>
© 2026 N2Oliver
</p>

</div>

</footer>

</body>
</html>