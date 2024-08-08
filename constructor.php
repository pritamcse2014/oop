<?php
    class ConstructorDemo {
        public $name;
        public $name1 = "Pritam";
        function setName() {
            echo "Hello World!";
        }

        // function __construct()
        // {
        //     echo "Constructor Called.";
        // }
        
        // function __construct()
        // {
        //     $this->name="Pritam Kumar Kundu";
        // }

        // function displayName() {
        //     echo $this->name;
        // }

        // function __construct()
        // {
            
        // }

        // function displayName() {
        //     echo $this->name1;
        // }

        function __construct($name)
        {
            $this->name=$name;
        }

        function displayName() {
            echo $this->name;
        }
    }
    // $cd = new ConstructorDemo();
    $cd = new ConstructorDemo("Prity");
    $cd->setName();
    echo "<br>";
    $cd->displayName();
?>