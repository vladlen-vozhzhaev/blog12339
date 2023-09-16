<?php
    class Person{
        public $name;
        public $lastname;
        public $age;

        public function __construct($name, $lastname, $age){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
        }

        public function sayHi($name){
            echo "Hello $name";
        }
        public static function test(){
            echo "hello world";
        }
    }

    $ivan = new Person("Ivan", "Ivanov", 32);
    $alex = new Person("Alex", "Petrov", 31);
    Person::test();