<?php
ob_start();
$title = "ADD";
?>
<!--action="addProdukts"-->
<form id="add" action="addProdukts" method="GET">
    SKU:<input type="text" name="sku" id="sku" for="sku" ><br>
    Name:<input type="text" name="name" id="name" for="name"><br>
    Price:<input type="nubmer" name="price" id="price" for="price"><br>
    <input type="radio" id="1" name="dataBut" onclick="check()" value="dvd" for="char1">DVD
    <input type="radio" id="1" name="dataBut" onclick="check()"value="book" for="char2">Book
    <input type="radio" id="1" name="dataBut" onclick="check()"value="furniture" id="posle" for="char3">Furniture<br>
    <div id="decepyion">   
    </div>
    <input type="submit" name="submitADd"  id="submitADd" value="save" >
</form>

<form method="GET" action="index">
    <input href="registr"type="submit" name="bac" value="cansel">
</form>
<?php 
$content = ob_get_clean(); 
?>
<?php
include "templates/layout.php";


