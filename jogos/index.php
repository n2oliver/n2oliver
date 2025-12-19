<?php
$query = $_SERVER['QUERY_STRING'] ?? '';

$location = '/';

if ($query !== '') {
    $location .= '?' . $query;
}

header("Location: $location", true, 302);
exit;