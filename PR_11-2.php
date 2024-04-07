<form method="POST">
    <label for="name">Name :</label>
    <input type="text" name="name">
    <label for="email">Email :</label>
    <input type="email" name="mail">
    <input type="submit">
</form>
<?php 
    include "vendor/autoload.php";
    use PHPMailer\PHPMailer\PHPMailer;
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='bhargavmbhatt24@gmail.com'; 
        $mail->Password='bcfi snnx chrt gnfz';
        $mail->SMTPSecure='ssl';
        $mail->Port=465;
        $mail->setFrom("bhargavmbhatt24@gmail.com",'Bhargav Bhatt');
        $mail->addAddress($_POST['mail'],$_POST['name']);
        $mail->isHTML(true);
        $mail->Subject='Practical 11';
        $mail->Body='this was a demo practical for sending a mail, this is sented from a student at gtu';
        if($mail->send()){
            echo "<h2>Email Sented</h2>";
        }else{
            echo "<h2>Something Unexpected happend...!</h2>";
        }
    }

?>