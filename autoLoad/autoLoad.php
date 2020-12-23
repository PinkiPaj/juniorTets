<?php

spl_autoload_register('autoLoader');

function autoLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REAUEST_URI'];
    
    if(strpos($url, 'autoLoader')!==false){
        $path='../classes/';
    } else {
        $path='classes/';
    }
    $extension='.php';
    require_once $path.$className.$extension;
}
