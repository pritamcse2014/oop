<?php
    class Honda {
        
    }
    
    class Cars extends Honda {

    }
    
    class Honda1 {
        function companyName() {
            echo "Honda";
        }
    }
    
    class Cars1 extends Honda1 {

    }
    
    class Honda2 {
        function companyName2() {
            echo "Honda";
        }
    }
    
    class Cars2 extends Honda2 {
        function companyName2() {
            echo "Honda City";
        }
    }
    
    class Honda3 {
        final function companyName3() {
            echo "Honda";
        }
    }
    
    class Cars3 extends Honda3 {
        // function companyName2() {
        //     echo "Honda City";
        // }
    }

    $car = new Cars();
    $car1 = new Cars1();
    $car1->companyName();
    echo "<br>";
    $car2 = new Cars2();
    $car2->companyName2();
    echo "<br>";
    $car3 = new Cars3();
    $car3->companyName3();
?>