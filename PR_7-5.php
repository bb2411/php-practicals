<?php 
    class college{
        public $code=609;
        public function announcement(){
            echo "here is a new announcment from college adminstration<br>";
        }
    }
    class student extends college{
        public $name;
        public $rollno;
        public $contact;
        public function setdata($n,$r,$c)
        {
            $this->name=$n;
            $this->rollno=$r;
            $this->contact=$c;
        }
        public function printdata_s(){
            echo "name :".$this->name."<br>";
            echo "rollno :".$this->rollno."<br>";
        }
    }
    class sem4 extends student{
        public $cn;
        public $ise;
        function __construct($cn, $ise,$n,$r,$c){
            $this->cn=$cn;
            $this->ise=$ise;
            $this->setdata($n,$r,$c);
        }
        function printdata(){
            echo "cn :".$this->cn."<br>";
            echo "ïse :".$this->ise."<br>";
        }
    }
    $a=new sem4(19,20,"bhargav",7004,123456);
    $a->announcement();
    $a->printdata_s();
    $a->printdata();
?>