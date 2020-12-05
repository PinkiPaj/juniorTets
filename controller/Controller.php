<?php

class Controller {

    //error404------------------------
    public static function error404() {
        include_once 'view/404.php';
    }
    public static function addProdukt() {
        include_once 'view/addProdukt.php';
    }
    //index---------
    public static function index() {
        $produktLIst = Model::produktLIst();
        include_once 'view/index.php';
    }
    public static function deleteAll() {
        header('Location:index.php');
    }
    public static function addProdukts() {
        $submit = $_GET['submitADd'];
        print_r($submit);
        if ($submit == false){
            include_once 'view/addProdukt.php';
        } else {
            Model::addProdukt();
            header('Location:index.php');
        }
        
    }
    
}
