<?php $APP_URL = '/jogos/caca-palavras'; 

$aid = getenv('AID_POPADS'); // seu AID PopAds
$urlDestino = 'https://n2oliver.com'.$APP_URL; // página principal
$valorConversao = 0.0005; // valor simbólico da conversão
//-------------------------------------------------

$impressionid = $_GET['impressionid'] ?? null;

if ($impressionid) {
  // Testa se a página principal carrega com sucesso
  $ch = curl_init($urlDestino);
  curl_setopt_array($ch, [
    CURLOPT_NOBODY => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 5
  ]);
  curl_exec($ch);
  $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  // Se a página respondeu com HTTP 200 → postback para o PopAds
  if ($status == 200) {
    $postbackUrl = "http://serve.popads.net/cpixel.php?s2s=1&aid={$aid}&id={$impressionid}&value={$valorConversao}";
    @file_get_contents($postbackUrl);

    // (opcional) registrar em log local
    file_put_contents(__DIR__ . '/impressões_validas.log', date('Y-m-d H:i:s') . " | {$impressionid} | HTTP {$status}\n", FILE_APPEND);
  } else {
    // (opcional) registrar falhas
    file_put_contents(__DIR__ . '/falhas.log', date('Y-m-d H:i:s') . " | {$impressionid} | HTTP {$status}\n", FILE_APPEND);
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include('../../g-tags.php'); ?>
  <meta charset="UTF-8">
  <title>Caça-Palavras | n2oliver</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/n2.jpg"/>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>

  <style>
    body {
      font-family: 'Ubuntu', sans-serif;
      text-align: center;
      background-color: #e9ebee;
      padding: 2rem;
      background-image: url(../../img/web-design-technology-browsing-programming-concept.jpg);
      background-size: cover;
      backdrop-filter: brightness(.8);
    }
    .container {
      margin: auto;
      background: white;
      padding: 2rem;
      border-radius: 0px !important;
      box-shadow: 0 4px 8px rgba(0,0,0,0.6);
    }
    h1 {
      color: #333;
    }
    p {
      color: #555;
      font-size: 1.1rem;
    }
    .btn {
      display: inline-block;
      padding: 12px 24px;
      margin-top: 1rem;
      background-color: #007bff;
      color: white;
      border-radius: 6px;
      text-decoration: none;
      font-size: 1.2rem;
      font-weight: bold;
    }
    .btn:hover {
        background-color: #0056b3;
    }
    #main-text {
      background-image: url(/jogos/img/bg-grid.jpg);    
      position: relative;
      width: 100vw;
      background-size: cover;
      overflow: hidden;
    }
    .spotlight {
        position: absolute;
        width: 200px; /* Tamanho do holofote */
        height: 200px;
        border-radius: 50%; /* Transforma em círculo */
        /* Garante que o elemento não capture eventos do mouse, permitindo interação com o conteúdo abaixo */
        pointer-events: none; 
        
        filter: brightness(1); 
        background-color: rgba(255, 255, 255, .2); /* Fundo ligeiramente translúcido */
        /* Aplica o filtro de desfoque ao fundo visível através deste elemento */

        /* Posicionamento inicial fora da vista e ajuste para centralizar no cursor */
        top: 0;
        left: 0;
        transform: translate(-50%, -50%); 
        
        /* Adiciona uma transição suave para o movimento */
        transition: transform 0.1s linear; 
    }
  </style>
  <link rel="stylesheet" href="/styles-index.css">
  <link rel="stylesheet" href="/css/footer.css">
  <link rel="stylesheet" href="/sobre-mim.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
  <script defer
        data-site="e5e969e1-3c42-400f-ab17-83f62c295b9a"
        src="https://cdn.megapush.com.br/MegaPush.js">
    </script>
<!--<script data-cfasync="false" src="/popads-monetization.js"></script>-->
  <script src="/gtag_dispatcher.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" data-cfasync="false" src="/js/abrir-janela.js"></script>
  <!-- Hotjar Tracking Code for n2oliver.com -->
  <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:6543030,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>
</head>
<body style="backdrop-filter: brightness(.2)">
  <script async src="https://appsha-pnd.ctengine.io/js/script.js?wkey=97NjKiTr7b"></script>
  
  <script src="/js/anuncios.js"></script>
  <script>
    setTimeout(()=>{
        abrirSmartlinkUmaVez();
    }, 3200);
  </script>
<?php include("../../gtagmanager.php"); ?>
    <?php include('../../navbar.php'); ?>
    <script>
      const nav = document.querySelector('nav')
      nav.classList.add('col-md-8');
      nav.classList.add('m-auto');
      nav.classList.add('px-2');
      nav.style.fontSize = '12px';
    </script>
  <div id="main-text" class="col-md-8 container m-auto">
    <h1>Caça-Palavras</h1>
    <p>Encontre as palavras escondidas na grade. Arraste com o dedo ou mouse para selecionar.</p>
    <a id="jogar" href="#" class="btn">Jogar Agora</a>
  </div>
  <?php include("../../footer.php"); ?>
  
  <div class="spotlight"></div>
    <script>
      const footer = document.querySelector('footer')
      footer.classList.add('col-md-8');
      footer.classList.add('m-auto');
      footer.classList.add('px-0');
      document.addEventListener('DOMContentLoaded', ()=>{
        gtag("event", "qualify_lead", {
          currency: "USD",
          value: 0.0004
        });
        $('#jogar').click(()=>{
            window.location.href = '<?= $APP_URL ?>/jogo.php';
            gtag("event", "close_convert_lead", {
              currency: "USD",
              value: 0.0004
            });
        });
        if(document.referrer == '<?=$APP_URL?>/jogos' |
            document.referrer == '<?=$APP_URL?>/jogos/'
        ) {
            setTimeout(()=>{
                document.getElementById('jogar').click();
            }, 3000)
        }
      });
      

      const spotlight = document.querySelector('.spotlight');

      document.addEventListener('mousemove', (e) => {
          // Atualiza a posição X e Y do elemento para seguir o cursor
          spotlight.style.top = `${e.clientY}px`;
          spotlight.style.left = `${e.clientX}px`;
      });
    </script>
</body>
    <?php include("../../aads.php"); ?>
</html>
