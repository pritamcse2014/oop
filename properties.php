<?php
    class Properties {
        public $name = "Pritam Kumar Kundu";
        function getName() {
            echo $this->name;
        }

        function updateName() {
            $this->name = "Priya Rani Sarker";
        }
        
        function latestName($name) {
            $this->name = $name;
        }
    }
    $p1 = new Properties();
    // echo $p1->name;
    // $p1->getName();
    echo "<br>";
    $p1->updateName();
    $p1->latestName("Prity Rani Datta");
    $p1->getName();
?>