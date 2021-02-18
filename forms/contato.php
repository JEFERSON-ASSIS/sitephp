<?php   

require_once 'vendor/PHPMailer.php';
 
$results_messages = array();
 
$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';
ini_set('default_charset', 'UTF-8');
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'regulador261@gmail.com';
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$mail->isSMTP();
$mail->SMTPDebug  = 2;
$mail->Host       = "smtp.umbler.com";
$mail->Port       = "587";
$mail->SMTPSecure = "none";
$mail->SMTPAuth   = true;
$mail->Username   = "falecom@i7sistemas.com.br";
$mail->Password   = "senhadificil1#";
$mail->addReplyTo("falecom@i7sistemas.com.br", "jeferson");
$mail->setFrom("falecom@i7sistemas.com.br", "jeferson");
$mail->addAddress("regulador261@gmail.com");
$mail->Subject  = "ola (PHPMailer test using SMTP)";
$body = <<<'EOT'
oiii
EOT;
$mail->WordWrap = 78;
$mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images
$mail->addAttachment('images/phpmailer_mini.png','phpmailer_mini.png');  // optional name
$mail->addAttachment('images/phpmailer.png', 'phpmailer.png');  // optional name
 
try {
  $mail->send();
  $results_messages[] = "Message has been sent using SMTP";
}
catch (phpmailerException $e) {
  throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());
}
}
catch (phpmailerAppException $e) {
  $results_messages[] = $e->errorMessage();
}
 
if (count($results_messages) > 0) {
  echo "<h2>Run results</h2>\n";
  echo "<ul>\n";
foreach ($results_messages as $result) {
  echo "<li>$result</li>\n";
}
echo "</ul>\n";
}
?>