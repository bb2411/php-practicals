<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<?php
if($_POST['op']==='add'){
    echo "addition :".$_POST['a']+$_POST['b'];
}else if($_POST['op']==='div'){
    if($_POST['b']==0){
        echo "division by zero";
    }else{
        echo "division :".$_POST['a']/$_POST['b'];
    }
}else if($_POST['op']==='mul'){
    echo "multiplication :".$_POST['a']*$_POST['b'];
}else{
    echo "subtraction :".$_POST['a']-$_POST['b'];   
}
echo "<li><a href='form.html'>go back</a></li>"
?>