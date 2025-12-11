
    <?php include('g-tags.php'); ?>
    <?php
    // SEO defaults — can be overridden in a page by setting $meta_title, $meta_description, $meta_image, $canonical, $meta_robots
    $meta_title = isset($meta_title) ? $meta_title : 'n2oliver';
    $meta_description = isset($meta_description) ? $meta_description : 'n2oliver — notícias, jogos e recursos sobre tecnologia.';
    $meta_image = isset($meta_image) ? $meta_image : '/img/n2.jpg';
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'n2oliver.com';
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
    $canonical = isset($canonical) ? $canonical : $protocol . '://' . $host . $request_uri;
    $meta_robots = isset($meta_robots) ? $meta_robots : 'index,follow';
    ?>
    <title><?= htmlspecialchars($meta_title, ENT_QUOTES|ENT_HTML5) ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="no-referrer-when-downgrade" />
    <meta name="description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES|ENT_HTML5) ?>">
    <meta name="robots" content="<?= htmlspecialchars($meta_robots, ENT_QUOTES|ENT_HTML5) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES|ENT_HTML5) ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="/img/n2-ico.jpg"/>
    <link rel="preload" onload="this.rel='stylesheet'" as="style" href="/css/fonts/ubuntu/css2.css?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"  rel="stylesheet">
    <noscript><link rel="stylesheet" href="/css/fonts/ubuntu/css2.css?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"></noscript>

    <link rel="preload" onload="this.rel='stylesheet'" as="style" href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"/>
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap"></noscript>

    <?php include(__DIR__ . '/css/bootstrap/bootstrap.min.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"  async></script>
    <script src="/js/bootstrap/bootstrap.bundle.min.js"  async></script>
    <?php include(__DIR__ . '/css/font-awesome/all.min.php') ?>

    <link rel="stylesheet" href="/styles-index.css"/>
    <link rel="stylesheet" href="/sobre-mim.css"/>
    <style>
        .noticia-conteudo {
            transition: 1s ease;
            -moz-transition: 1s ease;
            -webkit-transition: 1s ease;
        }
    </style>
    <?php include(__DIR__ . '/js/jquery/jquery-3.7.1.min.php'); ?>
   
    <script defer
        data-site="e5e969e1-3c42-400f-ab17-83f62c295b9a"
        src="https://cdn.megapush.com.br/MegaPush.js">
    </script>
    <?php include(__DIR__ . '/gtag_dispatcher.php'); ?>
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?= htmlspecialchars($meta_title, ENT_QUOTES|ENT_HTML5) ?>">
        <meta property="og:description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES|ENT_HTML5) ?>">
        <meta property="og:image" content="<?= htmlspecialchars((strpos($meta_image, 'http') === 0) ? $meta_image : ($protocol . '://' . $host . $meta_image), ENT_QUOTES|ENT_HTML5) ?>">
        <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES|ENT_HTML5) ?>">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?= htmlspecialchars($meta_title, ENT_QUOTES|ENT_HTML5) ?>">
        <meta name="twitter:description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES|ENT_HTML5) ?>">
        <meta name="twitter:image" content="<?= htmlspecialchars((strpos($meta_image, 'http') === 0) ? $meta_image : ($protocol . '://' . $host . $meta_image), ENT_QUOTES|ENT_HTML5) ?>">

        <!-- JSON-LD structured data (Website / Organization) -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": <?= json_encode($meta_title) ?>,
            "url": <?= json_encode($protocol . '://' . $host) ?>,
            "publisher": {
                "@type": "Organization",
                "name": "n2oliver",
                "logo": { "@type": "ImageObject", "url": <?= json_encode($protocol . '://' . $host . $meta_image) ?> }
            }
        }
        </script>
