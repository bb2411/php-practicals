<form method="POST">
    <label for="username">Username :</label>
    <input type="text" name="username">
    <input type="submit">
</form>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){ 
    session_start();
    $_SESSION["username"]=$_POST['username'];
    echo "<a href='PR_8-12.php'>go to next page ".$_SESSION['username']."</a>";
}
?>