<?php
    class Fruits{
        //properties
        public $name;
        public $colour;

        //constructor
        function __construct($name, $colour)
        {
            $this->name = $name;
            $this->colour = $colour;
        }

        //destructor
        function __destruct()
        {
            echo "It will automaticallu callled at the end of script";
        }

        function getName(){
            return $this->name;
        }

        function getColour(){
            return $this->colour;
        }
    }
    
    //object
    $greps = new Fruits('Greps', 'Black');
    echo $greps->getName() . "\n";
    echo $greps->getColour();

?>