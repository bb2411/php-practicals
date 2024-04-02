<form method="POST">
    Date :<input name="name" placeholder="yyyy-dd-mm" type="text">
    <button type="submit">submit</button>
</form>
<?php 
    $pattern="/\d{4}-\d{2}-\d{2}/";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $string=$_POST['name'];
        if(preg_match($pattern,$string)){
            echo "correct";
        }else{
            echo "incorrect";
        }
    }
?>