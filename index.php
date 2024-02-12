<?php
$request_uri = $_SERVER['REQUEST_URI'];
$request_uri = strtok($request_uri, '?');
$uri_parts = explode('/', $request_uri);

array_shift($uri_parts);
$controller = $uri_parts[0] ?? '';
//подключение хедера
include 'includes/header.php';
switch ($controller) {
    case '':
        include('views/main.php');
        break;
    case '404':
        include('views/404.php');
        break;
    default:
        http_response_code(404);
        include('views/404.php');
        break;
}
//подключение футера
include "includes/footer.php";
