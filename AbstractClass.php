<?php
    //abstract class
    abstract class Math{
        abstract public function addition(); 
    }
    //Add class extends math
    class Add extends Math{
        //implementing addition functon from abstract class
        public function addition(){
            $a = 5;
            $b = 5;
            echo $a + $b;
        }
    }
    //object creation
    $obj = new Add();
    $obj->addition();
?>
