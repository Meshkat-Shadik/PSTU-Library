<?php
 require_once('PHPMailer/PHPMailerAutoload.php');
if(isset($_POST['btn'])){
 $mail = new PHPMailer();
 $mail->isSMTP();
 $mail->SMTPAuth =  true;
 $mail->SMTPSecure = 'ssl';
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = '465';
  $mail->isHTML();
   $mail->Username = 'unknown1602058@gmail.com';
    $mail->Password = '296667681575';
     // $mail->SetFrom =''
      $mail->setFrom('catshadik@gmail.com', 'PSTU Library');
      $mail->Subject = $_POST['sub'];
       $mail->Body = $_POST['msg'];
       $mail->AddAddress($_POST['xx']);
      if( $mail->Send()){
        echo 'Message has been sent';
    }
    else
    {
    	echo 'error';
    }



    //  require_once('PHPMailer/PHPMailerAutoload.php');

 // $mail = new PHPMailer();
 // $mail->isSMTP();
 // $mail->SMTPAuth =  true;
 // $mail->SMTPSecure = 'ssl';
 // $mail->Host = 'smtp.gmail.com';
 // $mail->Port = '465';
 //  $mail->isHTML();
 //   $mail->Username = 'unknown1602058@gmail.com';
 //    $mail->Password = '';
 //     // $mail->SetFrom =''
 //      $mail->setFrom('catshadik@gmail.com', 'PSTU Library');
 //      $mail->Subject = 'Hello World!';
 //       $mail->Body = 'a test mail';
 //       $mail->AddAddress('marufalaslam@gmail.com');
 //        $mail->Send();
 //        echo 'Message has been sent';
}
?>