<?php
include('./load-env.php');
include('./database/connectdb.php');
try {

    $stmt = $pdo->query("SELECT * FROM noticia ORDER BY data_publicacao DESC LIMIT 10");
    $noticias = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (empty($noticias)) {
        echo "<p class='text-danger px-4'>Nenhuma notícia encontrada.</p>";
    }
} catch (Exception $e) {
    die("Erro ao carregar notícias: " . $e->getMessage());
}
?>