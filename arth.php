<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<?php
echo $_POST['op'];
if($_POST['op']==='add'){
    echo "addition :".$_POST['a']+$_POST['b'];
}else{
    echo "subtract :".$_POST['a']-$_POST['b'];
}
?>