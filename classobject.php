<?php
    class MathOperations {
        public $val = 30;
        // function sum() {
        //     return 10 + 20;
        // }

        function sum1() {
            echo 10 + 20;
        }
        
        function sum2($a, $b) {
            echo $a + $b + $this->val;
        }

        function sub($a, $b) {
            echo $a - $b;
        }

        function multi($a, $b) {
            echo $a * $b;
        }
    }
    $maths = new MathOperations();
    // $maths1 = new MathOperations();
    // $maths2 = new MathOperations();
    // $maths3 = new MathOperations();
    // echo $maths->sum();
    $maths->sum1();
    echo "<br>";
    $maths->sum2(20, 30);
    echo "<br>";
    $maths->sum2(200, 300);
    echo "<br>";
    $maths->sub(30, 10);
    echo "<br>";
    $maths->multi(20, 30);
    echo "<br>";
    $maths1 = new MathOperations();
    echo "<br>";
    $maths1->sum2(1000, 2000);
?>