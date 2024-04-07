<form method="POST" enctype="multipart/form-data">
    <label for="name">emp_id :</label>
    <input type="text" name="empid">
    <label for="name">password :</label>
    <input type="text" name="password">
    <label for="name">Name :</label>
    <input type="text" name="name">
    <label for="name">Surame :</label>
    <input type="text" name="Surname">
    <label for="contact">Contact No. :</label>
    <input type="number" name="contact">
    <label for="email">Email :</label>
    <input type="email" name="mail"><br>
    <label for="experince">Experince :</label>
    <textarea name="exp"></textarea>
    <input type="submit">
</form>
<?php 
    include 'database.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $empid = $_POST['empid'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $surname = $_POST['Surname'];
        $contact = $_POST['contact'];
        $email = $_POST['mail'];
        $experience = $_POST['exp'];
        $sql="INSERT INTO employee VALUES('$empid','$name','$surname','$experience','$email', '$contact', '$password')";
        if($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

?>