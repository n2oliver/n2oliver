<div id="noticias" class="d-flex flex-column mb-0 p-0 shadow rounded quicksand" style="border-bottom-right-radius: 0px; overflow-y: scroll">
    <h1 class="w-100 text-light px-4 pt-3 pb-4 bg-primary mb-0"><div class="d-flex justify-content-between"><span>Notícias</span><i class="fa fa-expand"></i></div></h1>
    
    <?php include('./buscar-noticias.php'); ?>
    <?php foreach ($noticias as $index => $noticia): ?>
        <div class="border rounded shadow-sm mb-3 bg-light" style="transition: 1s">
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

                <div id="noticia-content-<?= $noticia['id'] ?>" style="display:none; overflow-y:auto" class="mt-3 noticia-conteudo">

                    <?php if (!empty($noticia['resumo'])): ?>
                        <div class="mt-2 text-muted"><?= $noticia['resumo'] ?></div>
                    <?php endif; ?>
                    <div class="mb-2">
                    <?php if (!empty($noticia['imagem'])): ?>
                            <img class="w-100" src="<?= htmlspecialchars($noticia['imagem'])?>"/>
                    <?php endif; ?>
                    <p><?= nl2br(htmlspecialchars($noticia['conteudo'])) ?></p>

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

        function fecharTodasNoticias() {
            document.querySelectorAll('.noticia-conteudo').forEach(div => {
                div.style.display = 'none';
            });
        }
        function toggleNoticiaContent(index) {
            const contentDiv = document.getElementById('noticia-content-' + index);
            if (!contentDiv) return;

            if (contentDiv.style.display === 'none') {
                // Fecha todos os conteúdos abertos antes (opcional)


                const visivel = contentDiv.style.display === 'block';
                fecharTodasNoticias();
                
                // Abre o conteúdo clicado
                contentDiv.style.display = 'block';
                contentDiv.closest('.border').style.overflowY = 'scroll';
            } else {
                // Fecha o conteúdo se já estava aberto
                contentDiv.style.display = 'none';
                contentDiv.closest('.border').style.overflowY = '';
            }
        }
        toggleNoticiaContent(1);
        $('.fa-expand').click(()=>{
            if($('#noticias').hasClass('noticia-expandida')) {
                $('#noticias').removeClass('noticia-expandida');
                $('#sobre-mim').addClass('col-md-10');
                $('.main-content').removeClass('d-none');
            } else {
                $('#noticias').addClass('noticia-expandida');
                $('#sobre-mim').removeClass('col-md-10');
                $('.main-content').addClass('d-none');
            }
        });

    </script>