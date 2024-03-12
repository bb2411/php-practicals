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