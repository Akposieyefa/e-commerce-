<?php
class MailClass 
{
      public $today;
      public $time;
      public function sendEmail($ary1,$ary2,$ary3) {
        require_once("PHPMailer/PHPMailerAutoload.php");
        $mail=new PHPMailer();
        $mail->CharSet = 'UTF-8';
        $mail->IsSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPSecure = 'tsl';
        $mail->Port       = 587;
        $mail->WordWrap = 50; 
        $mail->IsHTML(true); 
        $mail->SMTPAuth   = true;
        $mail->From     = "Queenscourtstories";
        $mail->Username   = 'orutu1@gmail.com';
        $mail->Password   = 'techshark3';
        $mail->SetFrom("orutu1@gmail.com");
        $mail->AddReplyTo('no-reply@orutu1@gmail.com','no-reply');
        $mail->Subject    = $ary2;
        $mail->MsgHTML();
            $mail->AddAddress($ary1 , $ary3);
            if (!$mail->send()) {
                $msg= "Mailer Error: " . $mail->ErrorInfo;
                return false;
            }
              return true;
        }

}

