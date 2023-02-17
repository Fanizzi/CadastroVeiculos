<?php
    
    /*
    function MyAutoload($class) {
        if(file_exists("./Controller/$class.php")) {
            include "./Controller/$class.php";

        } else if(file_exists("./Model/$class.php")) {
            include "./Model/$class.php";

        } else if(file_exists("./DAO/$class.php")) {
            include "./DAO/$class.php";

        }
    }

spl_autoload_register("MyAutoload");
*/

spl_autoload_register(function ($nome_da_classe)
{
    $arquivo = BASEDIR . '/' . $nome_da_classe . '.php';

    if (file_exists($arquivo))
    {
        include $arquivo;
    }
    else
        exit('Arquivo não encontrado. Arquivo: ' . $arquivo . "<br />");
});