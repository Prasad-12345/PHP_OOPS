<?php
    class Fruit{
        //properties
        public $name;
        public $colour;

        //get and set functions
        function setName($name){
            $this->name = $name;
        }

        function getName(){
            return $this->name;
        }

        function setColour($colour){
            $this->colour = $colour;
        }

        function getColour(){
            return $this->colour;
        }
    }

    //objects
    $apple = new Fruit();
    $banana = new Fruit();

    //setting propertirs using set method
    $apple->setName('Apple');
    $apple->setColour('Red');
    
    //printing propertirs using get method
    echo $apple->getName() . " ";
    echo $apple->getColour();
    echo "\n";

    //setting propertirs using set method
    $banana->setName('Banana');
    $banana->setColour('Yellow');

    //printing propertirs using get method
    echo $banana->getName() . " ";
    echo $banana->getColour();

    var_dump($apple instanceof Fruit);
?>