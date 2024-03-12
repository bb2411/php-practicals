<?php 

class student{
    public $name;
    public $enrollno;
    public $department;
    public $number;
    function getdata(){
        echo "name :".$this->name."<br>";
        echo "enroll :".$this->enrollno."<br>";
        echo "department :".$this->department."<br>";
        echo "number :".$this->number."<br>";
    }
}
class sem4 extends student{
    public $cn;
    public $ise;
    public $iwd;
    public $aoop;
    function __construct($cn, $ise, $iwd, $aoop,$name,$enroll,$department,$number){
        $this->cn=$cn;
        $this->ise=$ise;
        $this->iwd=$iwd;
        $this->aoop=$aoop;
        $this->name=$name;
        $this->enrollno=$enroll;
        $this->department=$department;
        $this->number=$number;
    }
    function printdata(){
        echo "cn :".$this->cn."<br>";
        echo "ïse :".$this->ise."<br>";
        echo "iwd :".$this->iwd."<br>";
        echo "aoop :".$this->aoop."<br>";
    }
}
$a=new sem4(76,67,57,67,"bhargav",226090307004,"computer",123456789);
$a->printdata();
$a->getdata();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">