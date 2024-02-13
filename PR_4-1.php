<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<?php 

$carname=$_POST['car'];
$carlist=[
    "tata"=>array("Safari", "Nexon", "Tigor", "Tiago"),
    "mahindra"=>array("XUV700", "XUV300", "Bolero"),
    "hyundai"=>array("i20", "Verna", "Venue", "Creta"),
    "Suzuki"=>array("Swift", "Alto", "Baleno", "Brezza")
];
if(in_array($carname,$carlist['Suzuki'])){
    echo "<h1>CAR COMPANY :Suzuki</h1>";
}elseif(in_array($carname,$carlist['mahindra'])){
    echo "<h1>CAR COMPANY :Mahindra</h1>";
}elseif(in_array($carname,$carlist['tata'])){
    echo "<h1>CAR COMPANY :Tata</h1>";
}elseif(in_array($carname,$carlist['hyundai'])){
    echo "<h1>CAR COMPANY :Hyudai</h1>";
}else{
    echo "<h1>ANY OTHER COMPANY</h1>";
}
?>