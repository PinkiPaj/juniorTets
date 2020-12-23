<?php
    include 'autoLoad/autoLoad.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="jquery/jquery.min.js" type="text/javascript"></script>
        <script src="jquery/jqueryFromProget.js" type="text/javascript"></script>
    </head>
    <body>
        <div style="width: 100%; border-bottom: 4px double black;float: left">                    
            <h1>AddProdukt</h1>
        </div>
        <form id="add" action="addProdukts" method="GET">
    SKU:<input type="text" name="sku" id="sku" for="sku" ><br>
    Name:<input type="text" name="name" id="name" for="name"><br>
    Price:<input type="nubmer" name="price" id="price" for="price"><br>
    <input type="radio" id="dvd" name="dataBut" value="dvd" for="char1">DVD
    <input type="radio" id="book" name="dataBut" value="book" for="char2">Book
    <input type="radio" id="furniture" name="dataBut" value="furniture" for="char3">Furniture<br>
    <div id="decepyion">   
    </div>
    <input type="submit" name="submitADd"  id="submitADd" value="save" >
</form>
        <div style="text-align: center; width: 100%; border-top: 4px double black;float: left">
            <p>Scamdowen Test assignment</p>
        </div>
    </body>
</html>
