<?php 
$a=123456789;
$rev=0;
$temp=0;
while($a>0){
    $last=$a%10;
    $a=$a-$last;
    $a=$a/10;
    $rev=$rev*10+$last;
}
echo $rev;
?>