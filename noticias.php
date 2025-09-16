<div class="d-flex">
    <div id="noticia" class="d-flex flex-column mb-0 p-0 shadow rounded quicksand" style="border-bottom-right-radius: 0px">
        
        <h1 class="w-100 text-light px-4 pt-3 pb-4 bg-primary mb-0">
            <div class="d-flex justify-content-start align-items-center">
                <i class="fa fa-pager p-2" style="position: absolute; top: 10px; left: 14px"></i>
                <i class="fa fa-expand pe-2 text-light"></i>
                <span id="noticias-span-title">Notícias</span><div class="oliver-dev-logo text-end w-100">n2oliver</div></div>
        </h1>

        <?php include('./buscar-noticia.php'); ?>
    </div>
    <div id="recentes" class="d-flex flex-column mb-0 p-0 shadow rounded quicksand" style="border-bottom-right-radius: 0px">
        
        <h1 class="w-100 text-light px-4 pt-3 pb-4 bg-primary mb-0">
            <div class="d-flex justify-content-start align-items-center">
                <i class="fa fa-clock pe-2 text-light"></i>
                <span id="noticias-span-title">Recentes</span></div>
        </h1>

        <?php 
            include('./buscar-noticias.php');
        ?>
        <?php if (empty($noticias)) { ?>
            <div class="p-3">Nenhuma notícia encontrada.</div>
        <?php } else { ?>
            <?php foreach ($noticias as $noticiasInfo): ?>
                <div class="border rounded shadow-sm mb-1 ms-1 bg-light">
                    <div class="p-3" style="background: darkslategray">
                        <div class="mb-1 text-light" style="cursor:pointer;" onclick="toggleNoticiaContent(<?= $noticiasInfo['id'] ?>)">
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

            <?php endforeach; ?>
        <?php } ?>
    </div>
</div>

<script>
    toggleNoticiaContent(5);
    function toggleNoticiaContent(index) {
        $.ajax({
            url: './buscar-noticia.php',
            type: 'POST',
            data: { id: index },
            success: function(response) {
                const contentDiv = document.getElementById('noticia-content');
                if (contentDiv) {
                    console.log(response);
                    contentDiv.innerHTML = '';
                    contentDiv.innerHTML = response;
                }
            },
            error: function() {
                alert('Erro ao carregar a notícia.');
            }
        });
    }
    $('.fa-pager, .fa-expand').click(() => {
        if ($('#recentes').hasClass('noticia-expandida')) {
            $('.fa-expand').removeClass('d-none');
            $('.fa-pager').addClass('d-none');
            $('#recentes').removeClass('noticia-expandida');
            $('#sobre-mim').addClass('col-xs-10');
            $('#sobre-mim').addClass('col-sm-10');
            $('#sobre-mim').addClass('col-md-10');
            $('#sobre-mim').addClass('col-lg-10');
            $('#sobre-mim').addClass('col-xl-10');
            $('#noticias-span-title').css('padding-left', 'initial');
            $('.main-content').removeClass('d-none');
            $('#recentes').css('position', 'relative');
            $('#recentes').css('background-color', 'transparent');
        } else {
            $('.fa-expand').addClass('d-none');
            $('.fa-pager').removeClass('d-none');
            $('#recentes').addClass('noticia-expandida');
            $('#sobre-mim').removeClass('col-xs-10');
            $('#sobre-mim').removeClass('col-sm-10');
            $('#sobre-mim').removeClass('col-md-10');
            $('#sobre-mim').removeClass('col-lg-10');
            $('#sobre-mim').removeClass('col-xl-10');
            $('#noticias-span-title').css('padding-left', 30);
            $('.main-content').addClass('d-none');
            $('#recentes').css('position', 'absolute');
            $('#recentes').css('background-color', 'white');
        }
    });
</script>