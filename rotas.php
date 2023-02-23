<?php

use CadastroVeiculos\Controller\MarcaController;
USE CadastroVeiculos\Controller\FabricanteController;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    case '/marca':
        MarcaController::index();
    break;

    case '/marca/form':
        MarcaController::form();
    break;

    case '/marca/save':
        MarcaController::save();
    break;

    case '/marca/delete':
        MarcaController::delete();
    break;


    
    case '/fabricante':
        FabricanteController::index();
    break;

    case '/fabricante/form':
        FabricanteController::form();
    break;

    case '/fabricante/save':
        FabricanteController::save();
    break;

    case '/fabricante/delete':
        FabricanteController::delete();
    break;
        



    default:
        echo 'Erro 404';
    break;
}