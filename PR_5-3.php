<?php
$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
$matrix2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);
$resultMatrix = array();
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $resultMatrix[$i][$j] = 0;
        for ($k = 0; $k < 3; $k++) {
            $resultMatrix[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
        }
    }
}
echo "Result Matrix:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $resultMatrix[$i][$j] . " ";
    }
    echo "<br>";
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
