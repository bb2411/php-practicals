<?php  
$a=array(9,3,2,4);
$n=count($a);
$i=0;
$k=0;
for($pass=0;$i<$n;$pass++){
    for($i=0;$i<$n-$pass;$i++){
        if($a[$i]>$a[$i+1]){
            $temp=$a[$i];
            $a[$i]=$a[$i+1];
            $a[$i+1]=$temp;
            for($k=0;$k<=$n-1;$k++){
                echo "<li>".$a[$k]."</li>";
            }
        }
    }
}
echo "<ul>";
echo "</ul>";
?>