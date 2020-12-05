<?php
ob_start();
$title = "Mein";
?>
<?php
    echo '<input id="massDelete" type="button" name="massDelete" value="MassDelete">';
    echo '<form action="addProdukt" method="POST">';
    echo '<input type="hidden"><br>';
    echo '<input type="submit" value="ADD">';
    echo '</form>';
foreach ($produktLIst as $produkt){
   echo '<div style="margin: 1% 7%; border: 4px double black;  width: 10%; float: left; text-align: center" >'; 
echo '<input type="checkbox" id="'.$produkt['ID'].'" style="float: "name="product" >';   
echo '<p style="margin-top:10%;">'.$produkt['sku'].'</p>';
echo '<p>'.$produkt['Name'].'</p>';
echo '<p>'.$produkt['Price'].'$</p>';
if($produkt['ProductType'] == 'furniture'){
    echo '<p>Dimension '.$produkt['ProductSpecific'].'</p>'; 
}
elseif ($produkt['ProductType'] == 'book') {
    echo '<p>Weight '.$produkt['ProductSpecific'].'</p>';
}
elseif ($produkt['ProductType'] == 'dvd') {
    echo '<p>Size '.$produkt['ProductSpecific'].'</p>';
}
echo '</div>'; 

}       
?>
<?php $content = ob_get_clean(); ?>

<?php
include "templates/layout.php";
