<form method="POST" enctype="multipart/form-data">
    <label for="name">Name :</label>
    <input type="text" name="name"><br>
    <label for="file">Attach Document</label>
    <input type="file" name="file">
    <input type="submit">
</form>
<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST['name'];
        $dir='uploads/';
        $decod=$_FILES['file']['name'];
        $file=$dir.basename($decod);
        if(move_uploaded_file($_FILES['file']['tmp_name'],$file)){
            echo "file is uploaded";
        }else{
            echo "error occured";
        }
    }
?>