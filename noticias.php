<div>
    <div id="noticia" class="d-flex flex-column mb-0 p-0 shadow rounded quicksand" style="border-bottom-right-radius: 0px">
        
        <h1 class="w-100 text-light px-4 pt-3 pb-4 bg-primary mb-0">
            <div class="d-flex justify-content-start align-items-center">
                <i class="fa fa-pager p-2"></i>
                <span id="noticias-span-title">Notícias</span><div class="oliver-dev-logo text-end w-100">n2oliver</div></div>
        </h1>

        <?php include('./buscar-noticia.php'); ?>
    </div>
    <div id="recentes" class="d-flex flex-column mb-0 p-0 shadow rounded quicksand" style="border-bottom-right-radius: 0px">
        
        <h1 class="text-light px-4 pt-3 pb-4 bg-primary mb-0" style="width: fit-content; min-width: 100%; position: sticky; top: 0; left: 0; z-index: 1;">
            <div class="d-flex justify-content-start align-items-center">
                <i class="fa fa-clock pe-2 text-light"></i>
                <span id="noticias-span-title">Recentes</span></div>
        </h1>

        <?php 
            include('./buscar-noticias.php');
        ?>
        <?php if (empty($noticias)) { ?>
            <div class="p-3" style="width: fit-content">Nenhuma notícia encontrada.</div>
        <?php } else { ?>
            <?php foreach ($noticias as $noticiasInfo): ?>
                <div class="border rounded shadow-sm mb-1 ms-1 bg-light" style="width: fit-content; min-width: 100%; cursor: pointer;" onclick="toggleNoticiaContent(event, <?= $noticiasInfo['id'] ?>)">
                    <div class="p-2" style="background: darkslategray">
                        <div class="d-flex align-items-center gap-2">
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

<script>
    toggleNoticiaContent(null, 6);
    function toggleNoticiaContent(e, index) {
        $.ajax({
            url: './buscar-noticia.php',
            type: 'POST',
            data: { id: index },
            success: function(response) {
                const contentDiv = document.getElementById('noticia-content');
                if (contentDiv) {
                    contentDiv.innerHTML = '';
                    contentDiv.innerHTML = response;
                    if(e !== null) {
                        contentDiv.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            },
            error: function() {
                alert('Erro ao carregar a notícia.');
            }
        });
    }
</script>