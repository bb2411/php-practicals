<form method="POST">
    <label for="username">Username :</label>
    <input name="user" type="text">
    <label for="email">Email :</label>
    <input name="pass" type="email">
    <input type="submit">
</form>
<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        echo "username :".$_POST['user'];
        echo "<br>email :".$_POST['pass'];
    }
?>