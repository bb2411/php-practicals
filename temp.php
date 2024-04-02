<?php 
$sum=0;
for($i=10;$i<51;$i++){
    if($i%5==0){
        $sum=$sum+$i;
    }
}
echo $sum;
?>
<?php 

$a=array(10,11,12,13,14,15,16,17,18,19,20);
$sum=0;
for($i=0;$i<=10;$i++){
    if($i%2==0){
        $sum=$sum+$a[$i];
    }
}
echo $sum;

?>
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