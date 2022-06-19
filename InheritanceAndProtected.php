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

        //function
        protected function intro(){
            echo "The fruit is {$this->name} and the couour is {$this->colour}";
        }
    }

    //class Strawberry inherit fruits 
    class Strawberry extends Fruits{
        //overriding constructor
        function __construct($name, $colour, $weight)
        {
            $this->name = $name;
            $this->colour = $colour;
            $this->weight = $weight;
        }

        //overriding function
        function intro(){
            echo "child class method \n";
            echo "The fruit is {$this->name} and the colour is {$this->colour} and the weight is {$this->weight}";
        }    
    }

    $berry = new Strawberry("berry", "Red", "1kg");
    $berry->intro();
?>