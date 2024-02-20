<?php 
$string=$_REQUEST['string'];
$len=0;
$word=0;
$i=0;
while(true){
    $i++;
    if(isset($string[$i])){
        if($string[$i]==" "){
            $word++;
        }
        $len++;
    }else{
        break;
    }
}
echo "STRING LENGTH :".$len."<br>";
echo "NUMBER OF WORDS :".$word."<br>";
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">