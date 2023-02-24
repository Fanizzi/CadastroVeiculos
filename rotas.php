<?php

use CadastroVeiculos\Controller\MarcaController;
use CadastroVeiculos\Controller\FabricanteController;
use CadastroVeiculos\Controller\TipoController;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    # ROTAS PARA MARCA #

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

    # ROTAS PARA FABRICANTE #
    
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

    # ROTAS PARA TIPO DE VEÍCULOS #

    case '/tipo':
        TipoController::index();
    break;

    case '/tipo/form':
        TipoController::form();
    break;

    case '/tipo/save':
        TipoController::save();
    break;

    case '/tipo/delete':
        TipoController::delete();
    break;
        



    default:
        echo 'Erro 404';
    break;
}