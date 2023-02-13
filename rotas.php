<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    case '/veiculo/form':
        include 'View/modules/Veiculo/FormVeiculo.php';
    break;

    default:
        echo "Erro 404";
    break;
}