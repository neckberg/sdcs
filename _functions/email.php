<?php
// *noe I wrote this as a way to use PHPMailer without Composer
// see PHPMailer-master/README.md, line 56 for details
// also see https://stackoverflow.com/questions/48128618/how-to-use-phpmailer-without-composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '_3rd_party/PHPMailer/src/Exception.php';
require '_3rd_party/PHPMailer/src/PHPMailer.php';
require '_3rd_party/PHPMailer/src/SMTP.php';

function PHPMailer_send_email($account, $pw, $to, $subject = '', $body = '', $from_name = '') {
  // php send email from gmail:
  // https://medium.com/@alienhue/sending-a-mail-using-gmail-smtp-php-d555aca6ca0b
  // https://stackoverflow.com/questions/712392/send-email-using-the-gmail-smtp-server-from-a-php-page

  // 1. Enabling less secure apps to access Gmail:
  // gmail > profile in upper right > manage your google account > security (https://myaccount.google.com/u/1/security?gar=1)
  // 2. UnlockCaptcha
  // https://accounts.google.com/b/0/UnlockCaptcha

  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = '465';
  $mail->isHTML();
  $mail->Username = $account;
  $mail->Password = $pw;
  if (!empty($from_name)) $mail->SetFrom($account, $from_name);
  $mail->Subject = $subject;
  $mail->Body = $body;
  $mail->AddAddress($to);
  if ($mail->send()) return true;
  error_log($mail->ErrorInfo);
  return false;
}

function send_email($to, $subject = '', $body = '') {
  $email_settings = parse_json_file('settings/email');
  return PHPMailer_send_email($email_settings['account'], $email_settings['password'], $to, $subject, $body, $email_settings['from_name']);
}
