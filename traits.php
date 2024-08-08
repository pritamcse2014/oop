<?php
    trait ParentCompany1 {
        function getTotalEmployee() {
            echo 500;
        }
        
        function getTotalProject() {
            echo 35;
        }
    }
    
    trait ParentCompany2 {
        function getTotalOffice() {
            echo 10;
        }
    }

    class Company {
        use ParentCompany1;
        use ParentCompany2;
    }

    $cmp = new Company();
    $cmp->getTotalEmployee();
    echo "<br>";
    $cmp->getTotalOffice();
    echo "<br>";
    $cmp->getTotalProject();
?>