<?php  
$a = array(9, 3, 2, 4);
$n = count($a) - 1;
$k = 0;
echo "<ul>";
for ($pass = 1; $pass <= $n; $pass++) {
    for ($i = 0; $i < $n - $pass; $i++) {
        if ($a[$i] > $a[$i + 1]) {
            $temp = $a[$i];
            $a[$i] = $a[$i + 1];
            $a[$i + 1] = $temp;
        }
    }
}
for ($k = 0; $k <= $n; $k++) {
    echo "<li>" . $a[$k] . "</li>";
}
echo "</ul>";
?>
