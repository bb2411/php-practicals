<?php
    $asarray=array("name"=>"bhargav_bhatt","rollno"=>226090307004,"department"=>"computer","city"=>"dhrangadhra","mobileno"=>3426025860);
    echo "Associative Array :<br>";
    var_dump($asarray);
    echo "<br>Now in Json :<br>";
    $jsonobj=json_encode($asarray);
    echo $jsonobj;
    echo "<br>and now again converting back to associative array :<br>";
    var_dump(json_decode($jsonobj,true));

?>