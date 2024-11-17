<?php 
interface ProductsFeatures{
    function images();
    function Owner();
}

class Product implements ProductsFeatures{
    function images(){
        echo "Images";
    }
    function Owner(){
        echo "Owner";
    }
}

$P1= new Product;
$P1->images();
$P1->Owner();
?>