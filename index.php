<h1>Bienvenidos a mi Web</h1>

<?php

require_once 'controllers/UsuarioController.php';

// var_dump($_GET['controller']);
// var_dump($_GET['action']);

if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'];
    // var_dump($nombre_controlador);
}else{
    echo "La pagina que buscas no existe";
    exit();
}



if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
    $action = $_GET['action'];
    $controlador->$action();
    }else{
        echo "la pagina que buscas no existe";
    }

}else{
     echo "la pagina que buscas no existe";
}

