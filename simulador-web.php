<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $meta_title = 'Simulador Web — n2oliver';
    $meta_description = 'Ferramenta de simulação web e exemplos interativos por n2oliver.';
    $meta_image = '/img/web-design-technology-browsing-programming-concept.jpg';
    $canonical = (isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : 'https://n2oliver.com/simulador-web.php');
    include("cabecalho.php"); ?>
</head>
<?php
@include("simulador-web-pagina.php");