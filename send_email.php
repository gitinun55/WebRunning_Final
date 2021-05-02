<?php
include("../connectDB/conn.php");

require_once "PHPMailer/PHPMailerAutoload.php";

    $getemail = mysqli_real_escape_string($con,$_POST['email']);

    $sql = "SELECT * FROM account WHERE Email = '".$getemail."' ";
    $query = mysqli_query($con,$sql);
  
  if(mysqli_num_rows($query) == 1)
  {
      $row=mysqli_fetch_array($query);
      $name = $row['Name'];
      $surname = $row['Surname'];
      $email=$row['Email'];
      $user = $row['Username'];
      $pass=$row['Password'];
    

    $mail = new PHPMailer;

    $mail->SMTPDebug = 3;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = "thsv25.hostatom.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = "email";                 
    $mail->Password = "password";                           
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "ssl";                           
    //Set TCP port to connect to 
    $mail->Port = 465;                                   
    //Set  sender account
    $mail->From = "ผู้ส่ง";
    $mail->FromName = "ชื่อแอพ/บริษัท";
    //Set  reciever account
    $mail->addAddress($_POST['email']);

    $mail->AddEmbeddedImage('../images/logo/logo.png', 'logo');

    $mail->isHTML(true);

    $mail->Subject = "Account Information";
    $mail->Body = '<img src="cid:logo" alt="" width="200" height="200" />
                    <h2>ข้อมูลบัญชีของคุณ '.$name." ".$surname.' คือ<h2>
                    <b>Username : '.$user.'</b><br>
                    <b>Password : '.$pass.'</b>
    
                    <h2>โปรดแจ้งทางผู้ดูแลโดยด่วนหากคุณไม่ได้ทำการร้องขอรหัสผ่านใหม่จากทางระบบ<br>
                    Thank you,<br>
                    </h2>';

    if($mail->send()) 
    {
      echo "Send";

    } 
    else 
    {
      echo "Not Send";
    }

  }
      else{
          echo "Email not match";
      }

?>