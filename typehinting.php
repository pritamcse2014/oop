<?php
    function fruit($name) {
        echo $name;
    }
    
    function fruit2(string $name) {
        echo $name;
    }
    
    function fruit3($name) {
        print_r($name);
    }
    
    function fruit4($data) {
        echo count($data);
    }

    class Fruits {
        function getName($name) {
            echo $name;
        }
    }
    $f1 = new Fruits();
    $f1->getName("Banana");
    echo "<br>";

    fruit("apple");
    echo "<br>";
    fruit2("apple");
    echo "<br>";
    fruit3(["apple"]);
    echo "<br>";
    fruit4(["apple"]);
?>