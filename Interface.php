<?php
    //interface
    interface Animal {
        public function makeSound();
    }

    //cat class implements animal
    class Cat implements Animal {
        //overriding function
        public function makeSound() {
        echo "Meow";
        }
    }

    $animal = new Cat();
    $animal->makeSound();
?>