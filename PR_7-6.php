<?php 
    class college{
        public function announcement(){
            echo "<h4>this is college level announcement </h4><br>";
        }
    }
    class student extends college{
        public function announcement(){
            echo "<h4>this is announcement by any student for query or any other subject</h4><br>";
        }
    }
    $a=new student();
    $b=new college();
    $b->announcement();
    $a->announcement();
?>