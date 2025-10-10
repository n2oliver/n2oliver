<?php
include_once('./load-env.php');
include_once('./database/connectdb.php');
try {
    $page = !empty($_POST['page']) ? $_POST['page'] : 1;
    if (empty($page)) {
        $page = 1;
    }
    $limit = 5;
    $offset = ($page - 1) * $limit;

    $stmt = $pdo->query("SELECT COUNT(id) AS total FROM noticia");
    $total = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $pdo->query("SELECT * FROM noticia ORDER BY data_publicacao DESC LIMIT $offset, $limit");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $noticias = array('results' => $results, 'page' => $page, 'pages' => $total[0]['total'] / 10);
    if (!empty($_POST['page']) && !empty($noticias['results'])) {
        echo json_encode($noticias);
    } else if(empty($noticias['results'])) {
        echo "<p class='text-danger px-4'>Nenhuma notícia encontrada.</p>";
    }
} catch (Exception $e) {
    die("Erro ao carregar notícias: " . $e->getMessage());
}
?>