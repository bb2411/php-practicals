<?php 

    abstract class hello{
        abstract public function hello();
    }
    class employee extends hello{
        public function hello(){
            echo "hello from employee<br>";
        }
    }
    class clint extends hello{
        public function hello(){
            echo "hello from clint<br>";
        }
    }
    $a=new employee();
    $b=new clint();
    $c=array($a,$b);
    foreach($c as $i){
        $i->hello();
    }
?>