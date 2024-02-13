<?php 
$result=0;
function grade($marks){
    global $result; 
    if($marks>=85 && $marks<=100){
        return "AA";
    }elseif($marks>=75 && $marks<=84){
        return "AB";
    }elseif($marks>=65 && $marks<=74){
        return "BB";
    }elseif($marks>=55 && $marks<=64){
        return "BC";
    }elseif($marks>=45 && $marks<=54){
        return "CC";
    }elseif($marks>=40 && $marks<=44){
        return "CD";
    }elseif($marks>=35 && $marks<=39){
        return "DD";
    }else{
        $result=1;
        return "FF";
    }
}
$mark1=$_POST['mark1'];
$mark2=$_POST['mark2'];
$mark3=$_POST['mark3'];
$mark4=$_POST['mark4'];
echo "<table>";
echo "<tr><td>Marks 1</td><td>".grade($mark1)."</td></tr>";
echo "<tr><td>Marks 2</td><td>".grade($mark2)."</td></tr>";
echo "<tr><td>Marks 3</td><td>".grade($mark3)."</td></tr>";
echo "<tr><td>Marks 4</td><td>".grade($mark4)."</td></tr>";
if($result==0){
    echo "<tr><td>PASSED</td></tr>";
}else{
    echo "<tr><td>FAILED</td></tr>";
}
echo "</table>";

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">