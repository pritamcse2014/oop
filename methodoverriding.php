<?php
    trait ParentCompany1 {
        function getEmployee() {
            echo 300;
        }
    }

    class Company1 {
        use ParentCompany1;
    }
    
    trait ParentCompany2 {
        function getEmployee() {
            echo 200;
        }
    }

    class Company2 {
        use ParentCompany2;
        function getEmployee() {
            echo 100;
        }
    }
    trait ParentCompany3 {
        function getEmployee() {
            echo 400;
        }
    }
    
    trait ParentCompany4 {
        function getEmployee() {
            echo 500;
        }
    }

    class Company3 {
        use ParentCompany3;
        use ParentCompany4;
        function getEmployee() {
            echo 100;
        }
    }
    
    trait ParentCompany5 {
        function getEmployee() {
            echo 550;
        }
    }
    
    trait ParentCompany6 {
        function getEmployee() {
            echo 450;
        }
    }

    class Company5 {
        use ParentCompany5;
        use ParentCompany6 {
            ParentCompany5::getEmployee insteadof ParentCompany6;
        }
    }
    
    trait ParentCompany7 {
        function getEmployee() {
            echo 250;
        }
    }
    
    trait ParentCompany8 {
        function getEmployee() {
            echo 350;
        }
    }

    class Company6 {
        use ParentCompany7;
        use ParentCompany8 {
            ParentCompany7::getEmployee insteadof ParentCompany8;
            ParentCompany8::getEmployee as getEmployeeCompany6;
        }
    }

    $c1 = new Company1();
    $c1->getEmployee();
    echo "<br>";
    $c2 = new Company2();
    $c2->getEmployee();
    echo "<br>";
    $c3 = new Company3();
    $c3->getEmployee();
    echo "<br>";
    $c4 = new Company5();
    $c4->getEmployee();
    echo "<br>";
    $c5 = new Company6();
    $c5->getEmployee();
    echo "<br>";
    $c6 = new Company6();
    $c6->getEmployee();
    echo "<br>";
    $c6->getEmployeeCompany6();
?>