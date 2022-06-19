<?php
    //trait
    trait message1{
        public function msg1(){
            echo "oops is fun \n";
        }
    }

    //trait
    trait message2{
        public function msg2(){
            echo "oops reduces code duplication";
        }
    }

    class welcome1{
        //using trait by using use keyword
        use message1;
    }

    class welcome2{
        //using trait by using use keyword
        use message1, message2;
    }

    //objects
    $obj1 = new welcome1();
    $obj2 = new welcome2();

    $obj1->msg1();
    $obj2->msg1();
    $obj2->msg2();
?>