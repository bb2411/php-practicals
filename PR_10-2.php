<form method="POST">
    <label for="empid">Emp_id</label>
    <input type="text" name="empid">
    <label for="password">Password</label>
    <input type="text" name="pass">
    <input type="submit">
</form>
<?php 
    include 'database.php';
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $empid=$_POST['empid'];
        $password=$_POST['pass'];
        $sql = "SELECT * FROM employee WHERE emp_code=$empid AND password=$password";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION['empid'] = $empid;
            echo "<a href='PR_10-4.php'>Logged In</a>";
        } else {
            echo "Invalid employee ID or password!";
        }
    }
?>