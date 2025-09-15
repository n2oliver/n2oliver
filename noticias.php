<div id="noticias" class="d-flex flex-column mb-0 p-0 shadow rounded quicksand" style="border-bottom-right-radius: 0px; min-width: fit-content">
    
    <h1 class="w-100 text-light px-4 pt-3 pb-4 bg-primary mb-0">
        <div class="d-flex justify-content-start align-items-center">
            <i class="fa fa-pager p-2" style="position: absolute; top: 10px; left: 14px"></i>
            <i class="fa fa-expand pe-2 text-light"></i>
            <span id="noticias-span-title">Notícias</span><div class="oliver-dev-logo text-end w-100">n2oliver</div></div>
    </h1>

    <?php include('./buscar-noticias.php'); ?>
    <?php foreach ($noticias as $index => $noticia): ?>
        <div class="border rounded shadow-sm mb-3 bg-light">
            <div class="p-3" style="position: sticky; top: 0; background: darkslategray">
                <h5 class="mb-1 text-light" style="cursor:pointer;" onclick="toggleNoticiaContent(<?= $noticia['id'] ?>)">
                    <?= $noticia['titulo'] ?>
                </h5>

                <small class="text-light">
                    Publicado em <?= date("d/m/Y H:i", strtotime($noticia['data_publicacao'])) ?>
                    por <?= htmlspecialchars($noticia['autor']) ?>
                    <?php if (!empty($noticia['categoria'])): ?>
                        — <em><?= htmlspecialchars($noticia['categoria']) ?></em>
                    <?php endif; ?>
                </small>
            </div>
            <div class="px-3">

                <div id="noticia-content-<?= $noticia['id'] ?>" style="" class="mt-3 noticia-conteudo">

                    <?php if (!empty($noticia['resumo'])): ?>
                        <div class="mt-2 text-dark text-center"><?= $noticia['resumo'] ?></div>
                    <?php endif; ?>
                    <div class="mb-2">
                        <?php if (!empty($noticia['imagem'])): ?>
                            <img class="w-50 float-start me-2 my-2" src="<?= htmlspecialchars($noticia['imagem']) ?>" />
                        <?php endif; ?>
                        <p class="text-dark"><?= $noticia['conteudo'] ?></p>

                    </div>
                    <?php if (!empty($noticia['data_edicao'])): ?>
                        <small class="text-muted">Editado em <?= date("d/m/Y H:i", strtotime($noticia['data_edicao'])) ?></small>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<script>
    // Fecha todos os conteúdos abertos antes (opcional)
    for(let item of $('.noticia-conteudo')){
        item.style.display = 'none';
        item.closest('.border').style.overflowY = '';
    }
    toggleNoticiaContent(5);
    function toggleNoticiaContent(index) {

        const contentDiv = document.getElementById('noticia-content-' + index);
        if (!contentDiv) return;

        if (contentDiv.style.display === 'none') {
            // Fecha todos os conteúdos abertos antes (opcional)
            for(let item of $('.noticia-conteudo')){
                item.style.display = 'none';
                item.closest('.border').style.overflowY = '';
            }

            const visivel = contentDiv.style.display === 'block';
            // Abre o conteúdo clicado
            contentDiv.style.display = 'block';
            contentDiv.closest('.border').style.overflowY = 'auto';
        } else {
            // Fecha o conteúdo se já estava aberto
            contentDiv.style.display = 'none';
            contentDiv.closest('.border').style.overflowY = '';
        }
    }
    $('.fa-pager, .fa-expand').click(() => {
        if ($('#noticias').hasClass('noticia-expandida')) {
            $('.fa-expand').removeClass('d-none');
            $('.fa-pager').addClass('d-none');
            $('#noticias').removeClass('noticia-expandida');
            $('#sobre-mim').addClass('col-xs-10');
            $('#sobre-mim').addClass('col-sm-10');
            $('#sobre-mim').addClass('col-md-10');
            $('#sobre-mim').addClass('col-lg-10');
            $('#sobre-mim').addClass('col-xl-10');
            $('#noticias-span-title').css('padding-left', 'initial');
            $('.main-content').removeClass('d-none');
            $('#noticias').css('position', 'relative');
            $('#noticias').css('background-color', 'transparent');
        } else {
            $('.fa-expand').addClass('d-none');
            $('.fa-pager').removeClass('d-none');
            $('#noticias').addClass('noticia-expandida');
            $('#sobre-mim').removeClass('col-xs-10');
            $('#sobre-mim').removeClass('col-sm-10');
            $('#sobre-mim').removeClass('col-md-10');
            $('#sobre-mim').removeClass('col-lg-10');
            $('#sobre-mim').removeClass('col-xl-10');
            $('#noticias-span-title').css('padding-left', 30);
            $('.main-content').addClass('d-none');
            $('#noticias').css('position', 'absolute');
            $('#noticias').css('background-color', 'white');
        }
    });
</script>