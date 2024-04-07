<?php 

    interface common_1{
        public function hello();
    }
    interface common_2{
        public function walk();
    }
    class human implements common_1,common_2{
        public $name;
        public function __construct($n){
            $this->name=$n;
        }
        public function hello(){
            echo "hello from $this->name<br>";
        }
        public function walk(){
            echo "$this->name is walking<br>";
        }
    }
    $a=new human("bhargav");
    $a->hello();
    $a->walk();
?>