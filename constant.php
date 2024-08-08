<?php
    class ConstantDemo {
        const collegeName = "JHPI";

        function getCollegeName() {
            echo self::collegeName;
            echo "<br>";
            echo ConstantDemo::collegeName;
        }

        private const collegeName2 = "JPI";

        function getCollegeName2() {
            echo self::collegeName2;
            echo "<br>";
        }
        
        protected const collegeName3 = "KPI";

        function getCollegeName3() {
            echo self::collegeName3;
            echo "<br>";
        }
    }

    class Child extends ConstantDemo {
        function getChildName() {
            echo self::collegeName3;
        }
    }

    echo ConstantDemo::collegeName;
    echo "<br>";
    $c1 = new ConstantDemo();
    $c1->getCollegeName();
    echo "<br>";
    $c1->getCollegeName2();
    echo "<br>";
    $child = new Child();
    $child->getChildName();
?>