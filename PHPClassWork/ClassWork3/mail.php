<?php
require 'class.phpmailer.php';

$lname = $_POST['last_name'];
$fname = $_POST['first_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$mail = new PHPMailer;

$mail->From = 'test@test.com';
$mail->FromName = 'Testname';
$mail->AddAddress('test2@test.com');

$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->Body = "Name: $lname";

$mail->Send();
