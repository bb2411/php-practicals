<form method="GET">
    <label for="username">Username :</label>
    <input name="user" type="text">
    <label for="email">Email :</label>
    <input name="pass" type="email">
    <input type="submit">
</form>
<?php 
    if($_SERVER['REQUEST_METHOD']=="GET"){
        echo "username :".$_GET['user'];
        echo "<br>email :".$_GET['pass'];
    }
?>