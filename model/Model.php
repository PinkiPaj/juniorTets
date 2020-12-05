<?php

class Model{
    public static function produktLIst(){
        $sql="SELECT * FROM `produkt`";
        $db=new database();
        //result = row -1 запись
        $rows=$db->getAll($sql);
        return $rows;
    }
    public static function addProdukt(){
        $sku = $_GET['sku'];
        $name = $_GET['name'];
        $Price = $_GET['Price'];        
        $dataBut = $_GET['dataBut'];
        if($dataBut == 'dvd' or $dataBut == 'book'){
            $data= $_GET['data'];
        }elseif ($dataBut == 'furniture') {
            $data= ''.$_GET['data'].'x'.$data= $_GET['data2'].'x'.$data= $_GET['data3'].'';
        }
        $sql="INSERT INTO `produkt`(`sku`, `Name`, `Price`, `ProductType`, `ProductSpecific`) "
                . "VALUES ('$sku','$name','$Price','$dataBut','$data')";
        $db=new database();
        //result = row -1 запись
        $rows=$db->getAll($sql);
        return $rows;
    }
}
