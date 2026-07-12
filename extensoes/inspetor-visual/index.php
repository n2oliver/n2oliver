<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" sizes="32x32" href="/img/insp.png" />

<title>Inspetor Visual - Inspecione Elementos HTML com um Clique</title>

<meta name="description" content="Visualize informações de elementos HTML, copie o código, consulte estilos CSS e ouça o texto da página utilizando leitura em voz alta.">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="inspetor.css" />
<script src="insp.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
</head>
<body>
<header>
<div class="container mt-4">

   <nav style="display: flex; justify-content: space-between;">

   <div class="logo">
   Inspetor Visual
   </div>

   <a class="button"
      href="https://chromewebstore.google.com/detail/kddpnplompfhboemlbfankhjpklalaoi"
      target="_blank"
      rel="noopener noreferrer">
      <i class="fa-solid fa-store"></i> Ver na loja
   </a>

   </nav>
   <div class="col-md-12">
      <div class="mb-4 text-center">
         <h1>
         Inspecione qualquer elemento da página com apenas um clique.
         </h1>

         <p>
         O Inspetor Visual facilita a análise de páginas web permitindo visualizar informações dos elementos HTML, consultar estilos CSS, copiar o código e ouvir o texto da página através da leitura em voz alta.
         Tudo de forma simples, rápida e diretamente no navegador.
         </p>

         <a class="button"
            href="#instalar-como-desenvolvedor">
            Saiba mais
         </a>
         <div>
            ou 
            <a href="/extensoes/inspetor-visual/versoes/inspetor-visual-0.5.2.zip">
                baixar agora (v0.5.2)
            </a> e 
            <a href="#instalar-como-desenvolvedor">instalar no modo desenvolvedor</a>
        </div>
      </div>
      <div class="hero d-flex flex-column">

         <div style="background-color: darkslategray; color: aquamarine; padding: 14px; width: 300px">
            <span id="tooltip">Copie um elemento pelo menu de contexto Inpetor Visual.</span><br>    
            <div class="d-flex justify-content-center">
                  <div>
                     <input class="form-check-input" type="checkbox" checked="true" role="switch" id="insp_visual_ligado" />
                  </div>
                  <div>
                     <label class="form-check-label" for="insp_visual_ligado"> Ativado</label>
                  </div>
            </div>
            <div class="d-flex justify-content-center">
                  <div>
                     <input class="form-check-input" type="checkbox" checked="false" role="switch" id="insp_visual_leitor_de_tela" />
                  </div>
                  <div>
                     <label class="form-check-label" for="insp_visual_leitor_de_tela"> Leitor de tela</label>
                  </div>
            </div>
            <div class="d-flex justify-content-center">
                  <select id="vozes-site" class="form-control">
                  </select>
            </div>
            
         </div>
         

         <div class="mockup">

         <div class="browser">
         <span></span><span></span><span></span>
         </div>

         <div class="element">
         font-size:16px;
         </div>

         <div class="element">
         color:#1a73e8;
         </div>

         <div class="element">
         🎙 Leitura em voz alta disponível
         </div>

         </div>
      <div>
   </div>

</div>

</div>

</div>

</header>

<section>

<div class="container">

<div class="title">

<h2 id="#instalar-como-desenvolvedor">
Recursos
</h2>

<p>
Tudo o que você precisa para estudar interfaces e acelerar seu desenvolvimento.
</p>
    
    <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 1;">
        <!-- BEGIN AADS AD UNIT 2421579 -->

        <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 99998;">
            <iframe data-aa='2421579' src='//acceptable.a-ads.com/2421579/?size=Adaptive'
                style='border:0; padding:0; width:70%; height:auto; overflow:hidden;display: block;margin: auto'>
            </iframe>
        </div>

        <!-- END AADS AD UNIT 2421579 -->
    </div>

</div>

<div class="grid">

<div class="card">
<h3>Inspeção Visual</h3>
<p>Visualize rapidamente informações dos elementos HTML diretamente sobre a página.</p>
</div>

<div class="card">
<h3>HTML</h3>
<p>Copie facilmente a estrutura HTML dos elementos selecionados.</p>
</div>

<div class="card">
<h3>CSS</h3>
<p>Consulte os estilos aplicados aos elementos para estudos ou desenvolvimento.</p>
</div>

<div class="card">
<h3>Leitura em Voz Alta</h3>
<p>Ouça o texto do elemento apontado utilizando a síntese de voz do navegador.</p>
</div>

<div class="card">
<h3>Rápido</h3>
<p>Ative a extensão e comece a utilizar imediatamente, sem configurações complexas.</p>
</div>

<div class="card">
<h3>Privacidade</h3>
<p>Todo o processamento acontece localmente. Nenhum dado pessoal é coletado.</p>
</div>

</div>

</div>

</section>

<section class="highlight">

<div class="container">

<div class="title">

<h2>
Ideal para
</h2>

</div>

<div class="features">

<div class="feature">

<div class="icon">💻</div>

<div>

<h3>Desenvolvedores</h3>

<p>
Analise rapidamente componentes HTML e CSS durante o desenvolvimento.
</p>

</div>

</div>

<div class="feature">

<div class="icon">🎨</div>

<div>

<h3>Designers</h3>

<p>
Entenda como interfaces são construídas e identifique estilos utilizados.
</p>

</div>

</div>

<div class="feature">

<div class="icon">🎓</div>

<div>

<h3>Estudantes</h3>

<p>
Aprenda HTML e CSS explorando qualquer página da internet em tempo real.
</p>

</div>
</div>


</div>

<div class="d-flex justify-content-center flex-column">
<h3 id="instalar-como-desenvolvedor">Instalar como desenvolvedor</h3>
<p>Consiste em instalar diretamente do arquivo sem precisar baixar da loja de aplicativos.</p>
<div class="alert alert-warning col-md-6"><strong>Aviso!</strong> Esteja ciente de que não nos responsabilizamos por qualquer dano ou mau uso decorrente do download do arquivo ou da instalação no navegador do usuário.</div>
<ul style="list-style-type: none">
    <strong>Como instalar</strong>
    <li>1. <strong>Baixe</strong> o arquivo zip contido no link 
        <a href="/extensoes/inspetor-visual/versoes/inspetor-visual-0.5.2.zip">
            baixar agora (v0.5.2)
        </a>;</li>
    <li>2. <strong>Extraia</strong> o arquivo para um diretório do seu computador;</li>
    <li>3. Abra o navegador e <strong>ative o 'Modo desenvolvedor'</strong> ou algo semelhante;</li>
    <li>4. <strong>Vá em Gerenciar extensões</strong> pelo menu do navegador;</li>
    <li>5. Clique em <strong>Carregar sem compactação</strong></li>
    <li>6. <strong>Selecione o diretório</strong> e confirme a escolha</li>
    <li><strong>Pronto!</strong> A extensão está instalada</li>
</ul>
</div>
</div>

</section>

<footer>

<div class="container">

<strong>Inspetor Visual</strong>

<p>
Ferramenta para inspeção visual de páginas web desenvolvida para tornar o aprendizado e o desenvolvimento mais rápidos.
</p>

<p style="margin-top:15px;">
© 2026 n2oliver
</p>

</div>

</footer>
<script>
console.log("Content script carregado!");
let copyBuffer = {};

let visitedElements = [];

window.onmousemove = mousemove;

async function mousemove (event) {
    if(localStorage && localStorage.getItem('insp_visual_ligado') == 'true') {
        const result = localStorage.getItem('insp_visual_ligado');
        const speakerResult = localStorage.getItem('insp_visual_leitor_de_tela');

        let oldPopup = document.getElementById('inspetor-visual-popup-site-site');
        let innerHTML = '<div>';
        const popup = document.createElement('div');
        
        if(oldPopup) {
            oldPopup.remove();
            delete oldPopup;
        }

        popup.id = 'inspetor-visual-popup-site-site';

        popup.style.top = (event.pageY + 14) + 'px';
        popup.style.left = (event.pageX + 14) + 'px';

        try {
            const element = event.target;
            if(element != null) {
                const estilos = getComputedStyle(element);
                const dimensoes = element.getBoundingClientRect();
                if(element.innerText) {
                    localStorage.setItem('inner_text_copy', false);
                    if(speakerResult == 'true') {
                        speak(element.innerText);
                    }
                    innerHTML += '<strong>' + element.innerText.split(' ')[0] + 
                        (element.innerText.split(' ')[1] ? ' ' + element.innerText.split(' ')[1] : '') +
                        (element.innerText.split(' ')[2] ? ' ' + element.innerText.split(' ')[2] : '') +
                    '</strong>'
                }
                innerHTML += '<div>ID: ' + ((element.id || estilos.id ? '#' + 
                (element.id || estilos.id) : '')) + '</div>';
                
                innerHTML += '<div>tag: ' + element.localName + '</div>';
                
                if((!(element.id || estilos.id) && element.className || estilos.className)) {
                    if(element.classList.length) {
                        const className = Object.assign([], element.classList).map((v) => '.' + v).join(' ');
                        innerHTML += '<div>class: ' + className + '</div>';
                    }
                }
                

                const width = (Math.abs(parseFloat(element.style.width || estilos.width).toFixed(2)));
                const height = (Math.abs(parseFloat(element.style.height || estilos.height).toFixed(2)));
                innerHTML += '<div>width: ' + (!isNaN(width) ? width + 'px' : 'não declarado') + '</div>';
                innerHTML += '<div>height: ' + (!isNaN(height) ? height + 'px' : 'não declarado') + '</div>';
                innerHTML += '<div>dimensões: ' + Math.abs(parseFloat(dimensoes.width).toFixed(2)) + 'px x ' + Math.abs(parseFloat(dimensoes.height).toFixed(2)) + 'px</div>';
                if ((element.style.backgroundColor || estilos.backgroundColor)) {
                    const bgColor = rgbaToHex(element.style.backgroundColor || estilos.backgroundColor);
                    innerHTML += 
                        `<div>
                            background-color: 
                            <div style="
                                display: inline-block;
                                border: 2px solid lightgrey;
                                height: 12px;
                                width: 12px;
                                background-color: #${bgColor}"></div> #${bgColor}
                            </div>`;
                }
                if ((element.style.color || estilos.getPropertyValue('color'))) {
                    const color = rgbaToHex(element.style.color || estilos.getPropertyValue('color'));
                    innerHTML += 
                        `<div>
                            color:
                            <div style="
                                display: inline-block;
                                border: 2px solid lightgrey;
                                height: 12px;
                                width: 12px;
                                color: #${color}"></div> #${color}
                            </div>`;
                }
                innerHTML += '</div>';
                popup.innerHTML = innerHTML;

                if(!visitedElements.includes(element)) {
                    visitedElements.push(element);
                }
                
                if(result == 'true') {
                    element.onmouseover = (event) => {
                        element.style.border = "2px dashed blue";
                        if(element.parent) {
                            if(!visitedElements.includes(element.parent)) {
                                visitedElements.push(element.parent);
                            }

                            const parentElement = element.parent;
                            parentElement.onmouseover = (parentEvent) => {
                                parentElement.style.border = "12px dashed blue";
                            }
                            parentElement.onmouseout = (parentEvent) => {
                                parentElement.style.border = "";
                            }
                        }
                    }
                    element.onmouseout = (event) => {
                        element.style.border = "";
                    }
                } else {
                    element.style.border = "";
                    
                    if(element.parent) {
                        parentElement.style.border = "";
                    }
                    desativar();
                }
            }
            setTimeout(()=>{
                if(result == 'true') {
                    let popupInDocument = document.getElementById(popup.id);
                    if(!popupInDocument) {
                        document.body.appendChild(popup);
                        popupInDocument = document.getElementById(popup.id);
                    } else 
                        popupInDocument.innerHTML = innerHTML;
                    
                    const popupDimensions = popupInDocument.getBoundingClientRect();
                    if((event.pageX + popupDimensions.width) > window.innerWidth - popupDimensions.width) popupInDocument.style.left = (event.pageX - window.scrollX + 14) + 'px';
                    if((event.pageY + popupDimensions.height) > window.innerHeight - popupDimensions.height) popupInDocument.style.top = (event.pageY - window.scrollY + 14) + 'px';
                } else {
                    desativar();
                }
            }, 50);
        } catch (e) {
            console.log(e);
        }
    } else {
        desativar();
    }
}
function desativar() {
    visitedElements.forEach((elem) => {
        elem.style.border = "";
        elem.onmouseover = null;
        elem.onmouseout = null;
    });
    visitedElements = [];
    window.mousemove = null;
    const popup = document.getElementById('inspetor-visual-popup-site-site');
    if(popup) popup.remove();
}
async function speak(text) {
  if ('speechSynthesis' in window) {
    cancelSpeak();
    const result = localStorage.getItem('voz');
    const utterance = new SpeechSynthesisUtterance(text);
    utterance.lang = 'pt-BR';
    utterance.rate = 2.0;
    utterance.pitch = 0.5;
    if(result) {
        utterance.voice = speechSynthesis.getVoices()[result];
    }

    speechSynthesis.speak(utterance);
  } else {
    console.info('Desculpe, seu navegador não suporta a API Web Speech.');
  }
}
document.addEventListener('mouseleave', ()=> {
    cancelSpeak();
})

function cancelSpeak() {
  if ('speechSynthesis' in window) {
    speechSynthesis.cancel();
  } else {
    console.info('Desculpe, seu navegador não suporta a API Web Speech.');
  }
}

function toHex(n) {
    return Number(n).toString(16).padStart(2, '0');
}
function rgbaToHex(rgba) {
    let rgbaSplit = rgba.split(','), r, g, b;
    if (rgbaSplit[0] && rgbaSplit[1] && rgbaSplit[2]) {
        r = rgbaSplit[0].trim().replace('rgba(', '').replace('rgb(', '');
        g = rgbaSplit[1].trim();
        b = rgbaSplit[2].trim().replace(')', '');
        let a = '';
        if (rgbaSplit[0].includes('a') && rgbaSplit[3]) {
            a = toHex(parseInt(rgbaSplit[3].trim().replace(')', '') * 255));
            color = rgba;
        } else {
            color = toHex(r) + toHex(g) + toHex(b);
        }

        return color;
    }
    return '';
}
</script>
</body>
</html>