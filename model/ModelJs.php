<?php
$dels = json_decode($_GET['del']);
$delsd = count($dels);
$db = mysqli_connect('localhost', 'root','');
mysqli_select_db($db, "junior");

if ($delsd != 0){
    print_r($delsd);
    for($i=0;$i<$delsd;$i++){
        $produkt = $dels[$i];
        print_r("$produkt");
        mysqli_query($db, "DELETE FROM `produkt` WHERE ID =".$produkt."");
    }    
};