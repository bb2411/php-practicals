<?php 

    interface hello{
        public function hello();
    }
    class student implements hello{
        public function hello(){
            echo "hello from student<br>";
        }
    }
    class faculty implements hello{
        public function hello(){
            echo "hello from faculty<br>";
        }
    }
    $a=new student();
    $b=new faculty();
    $c=array($a,$b);
    foreach($c as $i){
        $i->hello();
    }
?>