<?php
    class Teacher {
        public $city = "Dhaka";
        function nextExam() {
            echo "Next Exam is Maths.";
        }

        function age() {
            echo "My Age is 28";
        }
    }

    class Student extends Teacher {
        public $city = "Jessore";
        function age() {
            echo "My Age is 25";
        }
    }
    $t1 = new Teacher();
    $t1->nextExam();
    echo "<br>";
    $t1->age();
    echo "<br>";
    $st1 = new Student();
    $st1->nextExam();
    echo "<br>";
    $st1->age();
    echo "<br>";
    echo $st1->city;

?>