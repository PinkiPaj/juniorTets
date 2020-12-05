<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];
if($path == '' || $path == 'index.php'|| $path == 'index'){
    $response = Controller::index();
}
elseif ($path == 'addProdukt') {
    $response = Controller::addProdukt();
}
elseif ($path == 'deleteAll') {
    $response= Controller::deleteAll();
}
elseif ($path == 'addProdukts') {
    $response = Controller::addProdukts();
}
else{
    $response = Controller::error404();
}