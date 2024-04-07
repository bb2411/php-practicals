<form method="POST">
    <label for="empcode">Employee Code To Delete :</label>
    <input type="number" name="empcode">
    <input type="submit">
</form>
<?php 
    include 'database.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $empid=$_POST['empcode'];
        $sql = "SELECT * FROM employee WHERE emp_code=$empid";
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
            if($conn->query("delete from employee where emp_code=".$empid)){
                echo "<h2>Row Deleted</h2>";
            }else{
                echo "<h4>Something Went Wrong</h4>";
            }
        } else {
            echo "Invalid employee ID";
        }
    }
?>