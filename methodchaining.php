<?php
    class Company {
        function getName() {
            echo "This is Honda Motors. ";
            return $this;
        }
        
        function getEmployee() {
            echo "Honda has 3000 Employees. ";
            return $this;
        }
        
        function getOffice() {
            echo "Honda has 300 Office.";
        }
    }
    $company = new Company();
    $company->getName()->getEmployee()->getOffice();
?>