<?php 
    $str="bhargav bhatt";
    echo "String :".$str."<br>";
    $res=($str===strtolower($str));
    echo "string is in lower case :".$res."<br>";
    echo "reverse string :".strrev($str)."<br>";
    echo "removing white space :".str_replace(' ','',$str)."<br>";
    echo "replacing bhargav to kartik in string :".str_replace("bhargav","kartik",$str)."<br>";
?>