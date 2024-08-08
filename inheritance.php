<?php
    class Students1 {
        function login() {
            echo "Student Login";
        }
    }
    
    class Teachers1 {
        function login() {
            echo "Teacher Login";
        }
    }

    class UserAuth {
        function login() {
            echo "Logged In.";
        }
    }

    class Students extends UserAuth {
        
    }
    
    class Teachers extends UserAuth {
        
    }
    
    class UserAuth11 {
        function login($userType) {
            echo "$userType Logged In.";
        }
    }

    class Students11 extends UserAuth11 {
        
    }
    
    class Teachers11 extends UserAuth11 {
        
    }
    
    class UserAuth111 {
        function login($userType) {
            echo "$userType Logged In.";
        }
    }

    class Students111 extends UserAuth111 {
        function getName() {
            echo "Pritam";
        }
    }
    
    class Teachers111 extends UserAuth111 {
        function getSkill() {
            echo "Developer";
        }
    }

    $s1 = new Students1();
    $s1->login();
    
    echo "<br>";

    $t1 = new Teachers1();
    $t1->login();

    echo "<br>";
    
    $s1 = new Students();
    $s1->login();
    
    echo "<br>";

    $t1 = new Teachers();
    $t1->login();
    
    echo "<br>";
    
    $s1 = new Students11();
    $s1->login("Student");
    
    echo "<br>";

    $t1 = new Teachers11();
    $t1->login("Teacher");
    
    echo "<br>";
    
    $s1 = new Students111();
    $s1->login("Student");
    echo "<br>";
    $s1->getName();
    
    echo "<br>";

    $t1 = new Teachers111();
    $t1->login("Teacher");
    echo "<br>";
    $t1->getSkill();
?>