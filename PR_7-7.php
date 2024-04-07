<?php 

    class test{
        public function __call($name, $arguments)
        {
            $count=count($arguments);
            switch($count){
                case 3:$this->add($arguments[0],$arguments[1],$arguments[2]);
                break;
                case 2:$this->add2($arguments[0],$arguments[1]);
                break;
            }
        }
        public function add($a,$b,$c){
            echo "addition of three number :".$a+$b+$c;
        }
        public function add2($a,$b){
            echo "addition of two number :".$a+$b."<br>";
        }
    }
    $a=new test();
    $a->__call("add",[1,2]);
    $a->__call("add",[1,2,3]);
?>