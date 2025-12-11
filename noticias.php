<?php
$meta_title = 'Notícias — n2oliver';
?>
<!DOCTYPE html>
<html lang="auto">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include('./cabecalho.php'); ?>
    <style>
        body {
            background-image: url(img/web-design-technology-browsing-programming-concept.jpg);
            backdrop-filter: brightness(.64);
        }
    </style>
    <!--<script src="/popads-monetization.js"></script>-->
</head>
<body>
    
    <?php include('./navbar.php'); ?>
    <div>
        <h1 class="w-100 text-light px-4 pt-3 pb-4 bg-primary mb-0">
            <div class="d-flex justify-content-between align-items-center">
                <div style="width: fit-content">
                    <i class="fa fa-pager p-2"></i>
                    <span id="noticias-span-title">Notícias</span>
                </div>
                <div class="oliver-dev-logo text-end w-50">n2oliver</div>
            </div>
        </h1>
        <div id="noticia" class="d-flex mb-0 p-0 shadow rounded quicksand row align-items-stretch" style="border-bottom-right-radius: 0px">            
            <div id="noticia-content" class="pb-4 border rounded shadow-sm mb-3 mx-0 bg-light col-md-8">
            </div>

            <div id="recentes" class="d-flex flex-column mb-0 p-0 mx-0 shadow rounded quicksand col-md-4" style="border-bottom-right-radius: 0px">
                
                <h1 class="text-light px-4 pt-3 pb-4 bg-primary mb-0" style="width: fit-content; min-width: 100%; position: sticky; top: 0; left: 0; z-index: 1;">
                    <div class="d-flex justify-content-start align-items-center">
                        <i class="fa fa-clock pe-2 text-light"></i>
                        <span id="noticias-span-title">Recentes</span></div>
                </h1>

                <div id="recentes-wrapper" class="row mb-0 p-0">
                    <script type="text/javascript">
                        function waitForEl(selector, callback){
                            var poller1 = setInterval(function(){
                                $jObject = jQuery(selector);
                                if($jObject.length < 1){
                                    return;
                                }
                                clearInterval(poller1);
                                callback($jObject)
                            },100);
                        }
                        atOptions = {
                            'key' : '29929d8720c37977a6ea64b1b7db2d02',
                            'format' : 'iframe',
                            'height' : 50,
                            'width' : 320,
                            'params' : {}
                        };
                        </script>
                        <script
                        type="text/javascript"
                        src="//laxativethem.com/29929d8720c37977a6ea64b1b7db2d02/invoke.js"
                        ></script>
                    <?php 
                        include_once('./buscar-noticias.php');
                    ?>
                    <div id="noticias" class="align-self-start" 
                        style="overflow-y: auto; 
                        overflow-x: clip;
                        max-height: 100vh;">
                        <?php if (empty($noticias['results'])) { ?>
                            <div class="p-3" style="width: fit-content">Nenhuma notícia encontrada.</div>
                        <?php } else { ?>
                            <?php foreach ($noticias['results'] as $noticiasInfo): ?>
                                <div class="border rounded shadow-sm mb-1 ms-1 bg-light" style="width: 100%; cursor: pointer;" onclick="toggleNoticiaContent(event, <?= $noticiasInfo['id'] ?>)">
                                    <div class="p-2 noticia-card">
                                        <div class="item d-flex align-items-center gap-2">
                                            <?= !empty($noticiaInfo['imagem']) ? '<div class="recentes-imagem" style="background-image: url(' . $noticiasInfo['imagem']   . ')"></div>' : '' ?>
                                            <div class="d-flex flex-column">
                                                <div class="mb-1 text-light" style="cursor:pointer;" onclick="toggleNoticiaContent(event, <?= $noticiasInfo['id'] ?>)">
                                                    <?= $noticiasInfo['titulo'] ?>
                                                </div>

                                                <small class="text-light">
                                                    Publicado em <?= date("d/m/Y H:i", strtotime($noticiasInfo['data_publicacao'])) ?>
                                                    por <?= htmlspecialchars($noticiasInfo['autor']) ?>
                                                    <?php if (!empty($noticiasInfo['categoria'])): ?>
                                                        — <em><?= htmlspecialchars($noticiasInfo['categoria']) ?></em>
                                                    <?php endif; ?>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="border rounded shadow-sm mb-1 ms-1 bg-dark w-100 d-flex justify-content-between align-items-center" style="cursor: pointer; background-opacity: 0.5;">
                    <div>
                        <button class="btn btn-primary" id="voltar" onclick="voltar(event)"><i class="fa fa-arrow-left"></i></button>
                    </div>
                    <span id="page-buttons">
                        <script>
                            let pagina = "<?= $noticias['page'] ?>" || 0;
                        </script>
                        <?php
                        for($i = 0; $i <= $noticias['pages'] + 1; $i++) { ?>
                            <?= $i == $noticias['page'] - 1 ? '<button id="page" type="number" class="btn btn-primary text-center disabled" disabled value="' . $i . '">' . ($i + 1) . '</button>' : 
                            '<button id="page" type="number" class="btn btn-primary text-center" value="' . $i . '">' . ($i + 1) . '</button>' ?>
                        <?php } ?>
                    </span>
                    <div>
                        <button class="btn btn-primary" id="avancar" onclick="avancar(event)"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <?php include('./footer.php'); ?>
    </div>
</body>
</html>
    </div>
<script>
    toggleNoticiaContent(null, 9);
    function setContent(index) {
        const obj = {id: index};
        $.ajax({
            url: './../buscar-noticia.php',
            type: 'POST',
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            data: JSON.stringify(obj),
            success: function(response) {
                const contentDiv = document.getElementById('noticia-content');
                if (contentDiv) {
                    contentDiv.innerHTML = response.conteudo;
                    $("#imagem-background").css("background-image", "url(" + response.imagem + ")");
                    $("#imagem-background").html(response.titulo);
                    $("#imagem-background").append(response.resumo);
                }
            },
            error: function(xhr) {
                alert('Erro ao carregar a notícia.');
            }
        });
    }
    function toggleNoticiaContent(e, index) {
        const elementoExiste = e && e.target;
        if(elementoExiste && 
            (e.target.localName != 'button' && 
            e.target.localName != 'a' &&
            
            e.target.parentElement.localName != 'button' &&
            e.target.parentElement.localName != 'a')) {
                
            setContent(index);
            if(e !== null) {
                document.getElementById('noticia').scrollIntoView({ behavior: 'smooth' });
            }
        } else {
            setContent(index);
        }
    }
    function avancar(event) {
        pagina = pagina+1;
        buscarNoticias(event);
    }
    
    function voltar(event) {
        pagina = pagina > 1 ? pagina - 1 : 1;
        buscarNoticias(event);
    }
    function buscarNoticias(event) {
        const component = $(event.target);
        const temNumero = Boolean(component.text());
        pagina = temNumero ? component.text() : 
            event.target ? pagina : 1;
        $('#page-buttons .btn:not(#voltar):not(#avancar)')
            .removeClass('disabled')
            .prop('disabled', false);
        
        $.ajax({
            url: './../buscar-noticias.php',
            type: 'POST',
            data: { page: pagina },
            success: (data) => {
                if(temNumero) {
                    component.addClass('disabled');
                    component.prop('disabled', true);
                }
                
                $('#noticias').html('');
                const obj = JSON.parse(data);
                if(obj) {
                    if(pagina > obj.pages) {
                        pagina = pagina - 1;
                    }
                    
                    if(pagina < 1) {
                        pagina = pagina + 1;
                    }
                    for(let noticiasInfo of obj.results) {
                        const dataPublicacao = noticiasInfo.data_publicacao; // ex: "2025-10-08 14:30:00"
                        const data = new Date(dataPublicacao);

                        const dataFormatada = data.toLocaleString('pt-BR', {
                            day: '2-digit',
                            month: '2-digit',
                            year: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit',
                            hour12: false
                        });
                        $('#noticias').append(`
                            <div id="noticia-card-parent-${noticiasInfo['id']}" class="border rounded shadow-sm mb-1 ms-1 bg-light" style="width: 100%; cursor: pointer;" onclick="toggleNoticiaContent(event, ${ noticiasInfo['id'] })">
                                <div class="p-2 noticia-card">
                                    <div class="item d-flex align-items-center gap-2">
                                        ${ noticiasInfo['imagem'].length != 0 ? `<div class="recentes-imagem" style="background-image: url(${noticiasInfo['imagem']})"></div>` : ''}
                                        <div class="d-flex flex-column">
                                            <div class="mb-1 text-light" style="cursor:pointer;" onclick="toggleNoticiaContent(event, ${ noticiasInfo['id'] })">
                                                ${ noticiasInfo['titulo'] }
                                            </div>

                                            <small class="text-light">
                                                Publicado em ${ dataFormatada }
                                                por ${ noticiasInfo['autor'] }
                                                ${ (noticiasInfo['categoria'].length != 0) ? 
                                                    `— <em>${ noticiasInfo['categoria']}</em>` : ''}
                                                    
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);
                        $(`#noticia-card-parent-${noticiasInfo['id']}`).unbind('click').click((event)=>{
                            let obj = { ...noticiasInfo };
                            setTimeout(()=>{
                                toggleNoticiaContent(event, obj.id);
                                console.log(obj);
                            }, 200);
                        });
                    }
                    if(event.target) {
                        document.getElementById('noticias').scrollIntoView({ behavior: 'smooth' });
                    }
                }
                        
            },
            error: function() {
                alert('Erro ao carregar as notícias.');
            }
        });
    }
    $(document).ready(function(event) {
        buscarNoticias(event);
        $('#page-buttons .btn').click(buscarNoticias);
    });
</script>
</body>