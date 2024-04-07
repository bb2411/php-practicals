<form method="POST">
    <label for="username">Username :</label>
    <input type="text" name="username">
    <label for="password">Password :</label>
    <input type="text" name="password">
    <input type="submit">
</form>
<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        setcookie("username",$_POST['username']);
        setcookie("password",$_POST['password']);
        echo "<a href='PR_9-22.php'>Cookies are seted now check on another page<a>";
    }
?>