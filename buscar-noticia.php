<?php
include('./load-env.php');
include('./database/connectdb.php');
try {
    $where = "";
    if (!empty($_POST['id'])) {
        $where = "WHERE id = " . intval($_POST['id']);
    }
    $stmt = $pdo->query("SELECT * FROM noticia $where ORDER BY data_publicacao DESC LIMIT 1");
    $noticia = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (empty($noticia)) {
        echo "<p class='text-danger px-4'>Nenhuma notícia encontrada.</p>";
        return;
    }
    $noticiaInfo = $noticia[0];
    echo '<div id="noticia-content" class="border rounded shadow-sm mb-3 bg-light">' .
        '<div class="p-3">' .
            '<h1 class="mb-1 text-dark" style="cursor:pointer;" onclick="toggleNoticiaContent(' .
            $noticiaInfo['id'] . 
            ')">
                <strong>' .
                $noticiaInfo['titulo'] .
            '</strong></h1>
            <small class="text-muted">
                Publicado em ' . date("d/m/Y H:i", strtotime($noticiaInfo['data_publicacao'])) .
                ' por ' . htmlspecialchars($noticiaInfo['autor']);
                if (!empty($noticiaInfo['categoria'])) {
                    echo '— <em>' . htmlspecialchars($noticiaInfo['categoria']) . '</em>';
                }
            echo '</small>
        </div>
        <div class="px-3">
            <div data-id=' . $noticiaInfo['id'] . ' style="" class="mt-3 noticia-conteudo">';
                if (!empty($noticiaInfo['imagem'])) {
                    echo '<div id="imagem" alt="imagem" style="background-image: url(' . htmlspecialchars($noticiaInfo['imagem']) . ')" class="w-100 float-start me-2 my-2" ></div>';
                }
                if (!empty($noticiaInfo['resumo'])) {
                    echo '<div class="mt-2 text-dark"><h2><strong>' . htmlspecialchars($noticiaInfo['resumo']) . '</strong></h2></div>';
                }
                echo '<div class="mb-2">';
                echo '<p class="text-dark">' . $noticiaInfo['conteudo'] . '</p>
                </div>';
                if (!empty($noticiaInfo['data_edicao'])) {
                    echo '<small class="text-muted">Editado em ' . date("d/m/Y H:i", strtotime($noticiaInfo['data_edicao'])) . '</small>';
                }
            echo '</div>
        </div>
    </div>';
} catch (Exception $e) {
    die("Erro ao carregar notícias: " . $e->getMessage());
}
?>