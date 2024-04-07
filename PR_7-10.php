<?php 

    class human{
        public $name;
        public function __construct($n){
            $this->name=$n;

        }
        public function myname(){
            echo "name is $this->name <br>";
        }
    }
    $a=new human("bhargav");
    $b=$a;
    echo "orignal values<br>";
    $a->myname();
    $b->name="aditya";
    echo "by change the value of assigned object<br>";
    $a->myname();
    $c=clone $a;
    $c->name="darshan";
    echo "by cloning the object and modifing it<br>";
    $c->myname();
    $a->myname();
?>