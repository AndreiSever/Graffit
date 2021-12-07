<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php'; 
// Создаем письмо
$json = file_get_contents('php://input');
$data = json_decode($json,true);
$obj = [
  "success" => "",
  "empty_name" => "",
  "empty_phone" => "",
  "empty_checkbox" => "",
  "error_email" => ""
];
if (isset($data['name'])&& !empty($data['name'])&& isset($data['phone'])&& !empty($data['phone'])&& isset($data['checkbox'])&& !empty($data['checkbox'])){
  $mail = new PHPMailer(); 
  $mail->CharSet = "UTF-8";                                          
  $mail->isSMTP(); 
  $mail->Host       = 'mail.hosting.reg.ru';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'call@opt.bum74.ru';
  $mail->Password   = '3E8v4S7o';
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  $mail->setFrom('call@opt.bum74.ru',"call");
  $mail->addReplyTo('call@opt.bum74.ru',"call");
  //$mail->addAddress('nektomor@yandex.ru'); 
  $mail->addAddress('apodkopaev@a-r-b.ru'); 
  $mail->addBCC('call@opt.bum74.ru',"call");
  $mail->addCC('call@opt.bum74.ru',"call");
  $mail->isHTML(true);
  $mail->Subject = addslashes("Заказать звонок");
  $mail->Body    = "<html>
                    <body>
                    <p>Имя: ".addslashes($data['name'])."</p>
                    <p>Телефон: ".addslashes($data['phone'])."</p>
                    </body>
                    </html>";
  if ($mail->send()) {
    $obj["success"] = "ok";
  } else {
    $obj["error_email"] = $mail->ErrorInfo;
  }   
}else{
  if (empty($data['email'])){
    $obj["empty_email"] = "ok";
  }
  if (empty($data['phone'])){
    $obj["empty_phone"] = "ok";
  }
  if (empty($data['phone'])){
    $obj["empty_checkbox"] = "ok";
  }
}
echo json_encode($obj);
?>