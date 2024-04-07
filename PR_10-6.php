<form method="POST">
    <label for="empid">Emp_id</label>
    <input type="text" name="empid">
    <label for="password">Password</label>
    <input type="text" name="pass">
    <label for="newpass">Enter New Password :</label>
    <input type="text" name="newpass">
    <input type="submit">
</form>
<?php 
    include 'database.php';
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $empid=$_POST['empid'];
        $password=$_POST['pass'];
        $newpass=$_POST['newpass'];
        $sql = "SELECT * FROM employee WHERE emp_code=$empid AND password=$password";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $result=$result->fetch_assoc(); 
            echo "<table border><thead><H3>Employee Information</h3></thead>";
            echo "<tbody><tr><th>Name</th><td>".$result['name']."<td></tr>";
            echo "<tr><th>Surame</th><td>".$result['surname']."<td></tr>";
            echo "<tr><th>Email</th><td>".$result['email']."<td></tr>";
            echo "<tr><th>Mobile No</th><td>".$result['mobile_no']."<td></tr>";
            echo "<tr><th>Experince</th><td>".$result['experince']."<td></tr>";
            echo "</tbody></table><br>";
            if($conn->query("update employee set password=".$newpass)){
                echo "<h2>Password Updated</h2>";
            }
        } else {
            echo "Invalid employee ID or password!";
        }
    }
?>