<?php
    interface ProductFeatures {
        function images();
        function ownerDetails();
    }

    class Products implements ProductFeatures {
        function images() {
            echo "Product Images";
        }
        
        function ownerDetails()
        {
            echo "Owner Details";
        }
    }

    $product = new Products();
    $product->images();
    echo "<br>";
    $product->ownerDetails();
?>