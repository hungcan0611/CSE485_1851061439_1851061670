<?php
require_once("class.phpmailer.php");
require_once("class.smtp.php");
include("../config.php");
include("../header.php");

if(isset($_POST['submit'])){
  if(empty($_POST['email'])){
    header("location: ../../index.php");
    exit();
  }else{
    $email = $_POST['email'];
  }
  

  $mail=new PHPMailer();
  echo $email;

  $mail->SMTPDebug = 3;                                 
  $mail->isSMTP();                                       
  $mail->Host = 'smtp.gmail.com;';                       
  $mail->SMTPAuth = true;                              
  $mail->Username = 'bacsiquaidi2k@gmail.com';               
  $mail->Password = '01239472711';                     
  $mail->SMTPSecure = 'tls';                          
  $mail->Port = 587;                                     
  $mail->setFrom('bacsiquaidi2k@gmail.com', 'Cấn Duy Hưng');  
  $mail->addAddress($_POST['email']);                 
  $mail->isHTML(true);                                   
  $mail->Subject = 'Cam on ban da dang ki';  
  $mail->Body  = 'Thanks';  
  if($mail->send()){
    header("location: ../../../index.php");
    echo 'Message has been sent';  
  } else {  
    echo 'Message could not be sent';  
  }  
}
include("../footer.php");
?>  