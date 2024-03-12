<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<title>Practicaal 3</title>
<?php
$bap=$_POST['basic'];
$da=(50/100)*$bap;
$med=(4/100)*$bap;
$hra=(10/100)*$bap;
$gs=$bap+$da+$hra+$med;
$ins=(7/100)*$gs;
$pf=(5/100)*$gs;
$de=$ins+$pf;
$ns=$gs-$de;
echo '<table>'
    .'<tr><th>NAME</th><th>AMOUNT</th></tr>'
    .'<tr><td>Net salary</td><td>'.$ns.'</td></tr>'
    .'<tr><td>Gross salary</td><td>'.$gs.'</td></tr>'
    .'<tr><td>Deduction</td><td>'.$de.'</td></tr>'
    .'<tr><td>Dearness Allownce</td><td>'.$da.'</td></tr>'
    .'<tr><td>Provinent Fund</td><td>'.$ns.'</td></tr>'
    .'</table>';
?>