<?php

require_once "../../PHPMailer/PHPMailerAutoload.php";
$id_add = $_POST['id_add'];

$mysqli = new mysqli("localhost","root","","data_running") or die(mysqli_error($mysqli));

$sql = $mysqli->query("UPDATE add_event SET type = 1 , status_event = 1 WHERE id_add = $id_add ");
$query_email = $mysqli->query("SELECT first_name, last_name, email, id_add, user.id_user FROM add_event INNER JOIN user ON user.id_user = add_event.id_user WHERE id_add = $id_add");
$result = $query_email->fetch_assoc();

if($sql){
  $Mail = new PHPMailer();
  $Mail->IsSMTP(); // Use SMTP
  $Mail->Host        = "smtp.gmail.com"; // Sets SMTP server
  $Mail->SMTPDebug   = 2; // 2 to enable SMTP debug information
  $Mail->SMTPAuth    = TRUE; // enable SMTP authenticationS
  $Mail->SMTPSecure  = "tls"; //Secure conection
  $Mail->Port        = 587; // set the SMTP port
  $Mail->Username    = 'gunza.za3344@gmail.com'; // SMTP account username
  $Mail->Password    = 'Khonson2541'; // SMTP account password
  $Mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
  $Mail->CharSet     = 'UTF-8';
  $Mail->Encoding    = '8bit';
  $Mail->Subject     = 'Test Email Using Gmail';
  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
  $Mail->From        = 'test@ail.com';
  $Mail->FromName    = 'Virtual Runner';
  $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line

  $Mail->AddAddress($result["email"] ); // To:
  $Mail->isHTML( TRUE );
  $Mail->Subject = "Virtual Running งานวิ่งของคุณได้รับการอนุมัติจากทีมงานแล้ว";
  $Mail->Body    = 'อีเมลสำหรับยืนยันว่างานวิ่งของคุณได้รับการอนุมัติจากทีมงานแล้ว<br>
                    <br>
                    คุณสามารถเห็นงานวิ่งและจัดการงานวิ่งต่างๆได้ ของคุณได้จากแอปพลิเคชัน Virtual Running<br>
                    กรุณาตรวจสอบงานวิ่งของคุณหลังจากได้รับอีเมล์นี้อีกครั้ง<br>
                    <br>
                    ขอขอบคุณ<br>
                    ทีม Virtual Runner';
  $Mail->Send();
  $Mail->SmtpClose();

  if ( $Mail->IsError() ) { 
    echo "ERROR<br /><br />";
  }
  else {
    echo "<script type='text/javascript'>window.location.href = 'reserve.php';</script>";
    echo "OK";
  }

}

?>