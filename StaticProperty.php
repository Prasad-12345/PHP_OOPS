<?php
    class pi{
        //static variable
        public static $value = 3.14;
    }

    class x extends pi{
        //function returns value
        public function value(){
            return  parent::$value; //accessing parent class static variable
        }
    }
    //accessing static variable outside class
    echo x::$value;
?>