<?php 
session_start();
$empid=$_SESSION['empid'];
include "database.php";
$sql='select * from employee where emp_code='.$empid;
$result=$conn->query($sql);
if($result->num_rows>0){
    $result=$result->fetch_assoc(); 
    echo "<table border><thead><H3>Employee Information</h3></thead>";
    echo "<tbody><tr><th>Name</th><td>".$result['name']."<td></tr>";
    echo "<tr><th>Surame</th><td>".$result['surname']."<td></tr>";
    echo "<tr><th>Email</th><td>".$result['email']."<td></tr>";
    echo "<tr><th>Mobile No</th><td>".$result['mobile_no']."<td></tr>";
    echo "<tr><th>Experince</th><td>".$result['experince']."<td></tr>";
    echo "</tbody></table>";
}   
?>