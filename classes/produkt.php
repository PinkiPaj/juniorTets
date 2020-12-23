<?php
class Produk{
    private $SKU ;
    private $Name;
    private $Price;
    private $ProductType;
    private $ProductAtributs;           
    
    function getSKU() {
        return $this->SKU;
    }

    function getName() {
        return $this->Name;
    }

    function getPrice() {
        return $this->Price;
    }

    function getProductType() {
        return $this->ProductType;
    }

    function getProductAtributs() {
        return $this->ProductAtributs;
    }

    function setSKU($SKU) {
        $this->SKU = $SKU;
    }

    function setName($Name) {
        $this->Name = $Name;
    }

    function setPrice($Price) {
        $this->Price = $Price;
    }

    function setProductType($ProductType) {
        $this->ProductType = $ProductType;
    }

    function setProductAtributs($ProductAtributs) {
        $this->ProductAtributs = $ProductAtributs;
    }   
}