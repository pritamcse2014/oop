<?php
    class CountrySale {
        static public $totalSale = 1000;
    }

    class CitySale {
        static public $totalSale = 50;
        function getTotalSale() {
            echo self::$totalSale;
        }
    }
    
    class CountrySale1 {
        static public $totalSale1 = 100;
        function getTotalSale1() {
            echo self::$totalSale1;
        }
    }

    class CitySale1 extends CountrySale1 {
        static public $totalSale1 = 500;
        function getTotalSale1() {
            echo self::$totalSale1;
        }
    }
    
    class CountrySale2 {
        static public $totalSale2 = 100;
        function getTotalSale2() {
            echo static::$totalSale2;
        }
    }

    class CitySale2 extends CountrySale2 {
        static public $totalSale2 = 50;
    }
    
    class CountrySale3 {
        static public $totalSale3 = 100;
        function getTotalSale3() {
            echo static::$totalSale3;
        }
    }

    class CitySale3 extends CountrySale3 {
        static public $totalSale3 = 50;
    }
    
    class CountrySale4 {
        static public $totalSale4 = 100;
        function getTotalSale4() {
            echo static::$totalSale4;
        }
        function getAreaName() {
            self::areaName();
        }
        static function areaName() {
            echo "India";
        }
    }

    class CitySale4 extends CountrySale4 {
        static public $totalSale4 = 50;
        static function areaName() {
            echo "BD";
        }
    }
    
    class CountrySale5 {
        static public $totalSale5 = 100;
        function getTotalSale4() {
            echo static::$totalSale5;
        }
        function getAreaName() {
            static::areaName();
        }
        static function areaName() {
            echo "India";
        }
    }

    class CitySale5 extends CountrySale5 {
        static public $totalSale5 = 50;
        static function areaName() {
            echo "BD";
        }
    }

    $city = new CitySale();
    $city->getTotalSale();
    
    echo "<br>";

    $city1 = new CitySale1();
    $city1->getTotalSale1();
    
    echo "<br>";

    $city1 = new CitySale2();
    $city1->getTotalSale2();
    
    echo "<br>";

    $CountrySale3 = new CountrySale3();
    $CountrySale3->getTotalSale3();

    echo "<br>";

    $city4 = new CitySale4();
    $city4->getAreaName();
    
    echo "<br>";

    $city5 = new CitySale5();
    $city5->getAreaName();
?>