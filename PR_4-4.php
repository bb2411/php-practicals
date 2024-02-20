<?php 
$a = 0;
$b = 1;
$n=$_POST['n'];
echo "<ul>";
for($i=1;$i<=10;$i++){
    echo "<li>".$n."*".$i."=".$n*$i."</li>";
    }
echo "</ul>";
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">