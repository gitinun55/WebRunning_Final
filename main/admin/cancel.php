<?php

require_once "../../PHPMailer/PHPMailerAutoload.php";

$mysqli = new mysqli("localhost","root","","data_running") or die(mysqli_error($mysqli));
    
if(isset($_REQUEST['id_add_message']) && isset($_REQUEST['message_cancel'])){

    $id_add_message =  mysqli_real_escape_string($mysqli, $_REQUEST['id_add_message']);
    $message_cancel =  mysqli_real_escape_string($mysqli, $_REQUEST['message_cancel']);

    $sql = mysqli_query($mysqli,"UPDATE add_event SET detail_cancel = '$message_cancel' , type = 2 , status_event = 2 WHERE id_add = $id_add_message");
    $query_email = $mysqli->query("SELECT first_name, last_name, email, id_add, user.id_user, add_event.detail_cancel as detail FROM add_event INNER JOIN user ON user.id_user = add_event.id_user WHERE id_add = $id_add_message");
    $result = $query_email->fetch_assoc();

    if($sql){
        $Mail = new PHPMailer();
        $Mail->IsSMTP(); // Use SMTP
        $Mail->Host        = "smtp.gmail.com"; // Sets SMTP server
        $Mail->SMTPDebug   = 2; // 2 to enable SMTP debug information
        $Mail->SMTPAuth    = TRUE; // enable SMTP authentication
        $Mail->SMTPSecure  = "tls"; //Secure conectionS
        $Mail->Port        = 587; // set the SMTP port
        $Mail->Username    = 'gunza.za3344@gmail.com'; // SMTP account username
        $Mail->Password    = 'Khonson2541'; // SMTP account password
        $Mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
        $Mail->CharSet     = 'UTF-8';
        $Mail->Encoding    = '8bit';
        $Mail->Subject     = 'Test Email UsSSing Gmail';
        $Mail->ContentType = 'text/html; charset=utf-8\r\n';
        $Mail->From        = 'test@ail.com';
        $Mail->FromName    = 'Virtual Runner';
        $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line

        $Mail->AddAddress($result["email"] ); // To:
        $Mail->isHTML( TRUE );
        $Mail->Subject = "Virtual Running งานวิ่งของคุณไม่ได้รับการอนุมัติ";
        $Mail->Body    = '  อีเมลสำหรับยืนยันว่างานวิ่งของคุณยังถูกไม่ได้รับอนุมัติจากทีมงาน<br>
                            <br>
                            กรุณาทำการเพิ่มงานวิ่งของคุณมาอีกครั้ง โดยการเพิ่มงานวิ่งใหม่ในแอปพลิเคชั่น Virtual Running<br>
                            เหตุผลที่ไม่ได้รับการอนุมัติ : '.$result["detail"].'<br>
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
    //     echo "<script type='text/javascript'>window.location.href = 'reserve.php';</script>";

    // }else{
    //     echo "<script type='text/javascript'>alert('no sql');</script>";
    }
}
// else{
//     echo "<script type='text/javascript'>alert('no isset');</script>";
// }

  
  
?>