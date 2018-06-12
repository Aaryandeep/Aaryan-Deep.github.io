<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
$msg = $_POST['message'];
$email = $_POST['email'];
$fname = $_POST['name'];
$lname = $_POST['surname'];
$msgbr =  nl2br($msg);
$txt = ("contact form <br><br>Mail: ".$email."<br>name: ".$fname." ".$lname."<br>feedback: <br><br>".$msgbr);
$to = "aaryandeep6@gmail.com";
$subject = "feedback";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <mail@fromwebsite.com>' . "\r\n";

mail($to,$subject,$txt,$headers);
}
if(empty($_POST) && $_SERVER['REQUEST_METHOD'] === 'POST'){
  echo("<font color='red'>please enter information</font><br>");
}
?>
