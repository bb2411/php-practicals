<?php 
$a = 0;
$b = 1;
$n=$_POST['n'];
/**
    for($i=1;$i<=10;$i++){
        echo $n."*".$i."=".$n*$i;
    }
*/
echo "<ul>";
for ($i = 2; $i < $n; $i++) {
    $c = $a + $b;
    echo "<li>$c</li>";
    $a = $b;
    $b = $c;
}
echo "</ul>";
?>