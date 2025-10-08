<div>
    <div id="noticia" class="d-flex flex-column mb-0 p-0 shadow rounded quicksand" style="border-bottom-right-radius: 0px">
        
        <h1 class="w-100 text-light px-4 pt-3 pb-4 bg-primary mb-0">
            <div class="d-flex justify-content-start align-items-center">
                <i class="fa fa-pager p-2"></i>
                <span id="noticias-span-title">Notícias</span><div class="oliver-dev-logo text-end w-100">n2oliver</div></div>
        </h1>

        <?php include_once('./buscar-noticia.php'); ?>

    <div id="recentes" class="d-flex flex-column mb-0 p-0 shadow rounded quicksand" style="border-bottom-right-radius: 0px">
        
        <h1 class="text-light px-4 pt-3 pb-4 bg-primary mb-0" style="width: fit-content; min-width: 100%; position: sticky; top: 0; left: 0; z-index: 1;">
            <div class="d-flex justify-content-start align-items-center">
                <i class="fa fa-clock pe-2 text-light"></i>
                <span id="noticias-span-title">Recentes</span></div>
        </h1>

        <div id="recentes-wrapper" class="row mb-0 p-0">
            <?php 
                include_once('./buscar-noticias.php');
            ?>
            
            <div id="preview" 
                style="background-color: rgba(0,0,0,0.5)"
                class="col-sm-12 col-md-6">
            </div>
            <div id="noticias" class="flex-column col-sm-12 col-md-6" 
                style="overflow-y: scroll; 
                overflow-x: clip;
                max-height: 100vh;">
                <?php if (empty($noticias['results'])) { ?>
                    <div class="p-3" style="width: fit-content">Nenhuma notícia encontrada.</div>
                <?php } else { ?>
                    <?php foreach ($noticias['results'] as $noticiasInfo): ?>
                        <div class="border rounded shadow-sm mb-1 ms-1 bg-light" style="width: 100%; cursor: pointer;" onclick="toggleNoticiaContent(event, <?= $noticiasInfo['id'] ?>)">
                            <div class="p-2" style="background: darkslategray">
                                <div class="item d-flex align-items-center gap-2">
                                    <?= !empty($noticiaInfo['imagem']) ? '<div class="recentes-imagem" style="background-image: url(' . $noticiasInfo['imagem']   . ')"></div>' : '' ?>
                                    <div class="d-flex flex-column-reverse">
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
        <div class="border rounded shadow-sm mb-1 ms-1 bg-dark w-100 d-flex justify-content-between" style="cursor: pointer; background-opacity: 0.5;">
            <div>
                <button class="btn btn-primary" id="voltar" onclick="voltar(event)"><i class="fa fa-arrow-left"></i></button>
            </div>
            <span id="page-buttons">
                <script>
                    let pagina = <?= $noticias['page'] ?>;
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

<script>
    toggleNoticiaContent(null, 6);
    function toggleNoticiaContent(e, index) {
        const elementoExiste = e && e.target;
        console.log(elementoExiste ? e.target.localName : 'nenhum elemento');
        if(elementoExiste && 
            (e.target.localName != 'button' && 
            e.target.localName != 'a' &&
            
            e.target.parentElement.localName != 'button' &&
            e.target.parentElement.localName != 'a')) {
            $.ajax({
                url: './buscar-noticia.php',
                type: 'POST',
                data: { id: index },
                success: function(response) {
                    const contentDiv = document.getElementById('noticia-content');
                    if (contentDiv) {
                        contentDiv.outerHTML = response;
                        if(e !== null) {
                            document.getElementById('noticia').scrollIntoView({ behavior: 'smooth' });
                        }
                    }
                },
                error: function() {
                    alert('Erro ao carregar a notícia.');
                }
            });
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
        console.log('clicou');
        const component = $(event.target);
        const temNumero = Boolean(component.text());
        if(temNumero) pagina = component.text();
        $('#page-buttons .btn:not(#voltar):not(#avancar)')
            .removeClass('disabled')
            .prop('disabled', false);
        
        $.ajax({
            url: './buscar-noticias.php',
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
                        console.log(noticiasInfo);
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
                            <div class="border rounded shadow-sm mb-1 ms-1 bg-light" style="width: 100%; cursor: pointer;" onclick="toggleNoticiaContent(event, <?= $noticiasInfo['id'] ?>)">
                                <div class="p-2" style="background: darkslategray">
                                    <div class="item d-flex align-items-center gap-2">
                                        ${ noticiasInfo['imagem'].length != 0 ? `<div class="recentes-imagem" style="background-image: url(${noticiasInfo['imagem']})"></div>` : ''}
                                        <div class="d-flex flex-column-reverse">
                                            <div class="mb-1 text-light" style="cursor:pointer;" onclick="toggleNoticiaContent(event, <?= $noticiasInfo['id'] ?>)">
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
                    }
                    $('.item').hover(function() {
                        img = $(this).find('.recentes-imagem').css('background-image').replace('url("', 'url(').replace('")', ')');
                        if (img) {
                            $('#preview').html(`<div class="h-100" style="background-image: ${img};" alt="Carregando..." />`);
                        }
                    });
                }
                        
            },
            error: function() {
                alert('Erro ao carregar as notícias.');
            }
        });
    }
    $(document).ready(function() {
        let img = $(this).find('.recentes-imagem').css('background-image').replace('url("', 'url(').replace('")', ')');
        $('#preview').html(`<div class="h-100" style="background-image: ${img};" alt="Carregando..." />`);
        $('.item').hover(function() {
            img = $(this).find('.recentes-imagem').css('background-image').replace('url("', 'url(').replace('")', ')');
            if (img) {
                $('#preview').html(`<div class="h-100" style="background-image: ${img};" alt="Carregando..." />`);
            }
        });
        $('#page-buttons .btn').click(buscarNoticias);
    });
</script>