<?php
    abstract class ProductFeatures {
        abstract function ProductDetails();
        abstract function ProductImages();
        abstract function ProductOwnerDetails();
        function Common() {
            echo "Product Common";
        }
    }

    class UploadProduct extends ProductFeatures {
        function ProductDetails()
        {
            echo "Product Details.";
        }
        
        function ProductImages()
        {
            echo "Product Images.";
        }
        
        function ProductOwnerDetails()
        {
            echo "Product Owner Details.";
        }
        
        function Others()
        {
            echo "Product Others.";
        }
    }

    $upload = new UploadProduct();
    $upload->ProductDetails();
    echo "<br>";
    $upload->ProductImages();
    echo "<br>";
    $upload->ProductOwnerDetails();
    echo "<br>";
    $upload->Common();
    echo "<br>";
    $upload->Others();
?>