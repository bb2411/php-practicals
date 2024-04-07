<form method="POST" enctype="multipart/form-data">
    <label for="name">Name :</label>
    <input type="text" name="name">
    <label for="contact">Contact No. :</label>
    <input type="number" name="contact">
    <label for="email">Email :</label>
    <input type="email" name="mail">
    <label for="dob">Date of birth :</label>
    <input type="date" name="dob">
    <div>
        <h4>Known Programing Language</h4>
        <label for="C++">C++</label>
        <input type="checkbox" name="knownl[]" value="C++">
        <label for="java">Java</label>
        <input type="checkbox" name="knownl[]" value="java">
        <label for="android">Android</label>
        <input type="checkbox" name="knownl[]" value="android">
    </div>
    <label for="contri">Contries Visited :</label>
    <select name="contry[]" multiple>
        <option value="India">India</option>
        <option value="UAE">UAE</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="australia">Australia</option>
    </select>
    <label for="bloodgroupe">Blood Group :</label>
    <label for="blood">A</label>
    <input type="radio" name="blood" value="A">
    <label for="blood">B</label>
    <input type="radio" name="blood" value="B">
    <label for="blood">AB</label>
    <input type="radio" name="blood" value="AB+">
    <label for="experince">Experince :</label>
    <textarea name="exp"></textarea>
    <label for="favcol">Favorite Color :</label>
    <input type="color" name="favcol">
    <label for="resume">Attach Resume :</label>
    <input type="file" name="file">
    <input type="submit">
</form>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<?php
 if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['mail'];
    $dob = $_POST['dob'];
    $knowlang = $_POST['knownl'];
    $visitcontry =$_POST['contry'];
    $blood = $_POST['blood'];
    $exp = $_POST['exp'];
    $fav = $_POST['favcol'];
    $dir='uploads/';
    $decod=$_FILES['file']['name'];
    $file=$dir.basename($decod);
    echo "$file $decod";
    if(move_uploaded_file($_FILES['file']['tmp_name'],$file)){
        echo "file is uploaded";
    }else{
        echo "error occured";
    }
    echo "<table border='1'>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Name</td><td>$name</td></tr>";
    if(preg_match('/\d{10}/',$contact)){
        echo "<tr><td>Contact No.</td><td>$contact</td></tr>";
    }else{
        echo "<tr><td>Contact No.</td><td>Invalid</td></tr>";
    }
    echo "<tr><td>Email</td><td>$email</td></tr>";
    if(preg_match('/\d{4}-\d{2}-\d{2}/',$dob)){
        echo "<tr><td>Date of Birth</td><td>$dob</td></tr>";
    }else{
        echo "<tr><td>Date of Birth</td><td>INVALID</td></tr>";
    }
    echo "<tr><td>Known Programming Languages</td><td>" . implode(', ', $knowlang) . "</td></tr>";
    echo "<tr><td>Countries Visited</td><td>" . implode(', ', $visitcontry) . "</td></tr>";
    echo "<tr><td>Blood Group</td><td>$blood</td></tr>";
    echo "<tr><td>Experience</td><td>$exp</td></tr>";
    echo "<tr><td>Favorite Color</td><td style='background-color:$fav'>$fav</td></tr>";
    echo "<tr><td>Attached Resume</td><td>$decod</td></tr>";
    echo "</table>"; 
}
 

?>