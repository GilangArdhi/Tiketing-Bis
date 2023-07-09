<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries\PHPMailer\src\PHPMailer.php';
require_once APPPATH . 'libraries\PHPMailer\src\SMTP.php';
require_once APPPATH . 'libraries\PHPMailer\src\Exception.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

class Phpmailer_lib
{
    public function __construct()
    {
        // log_message('Debug', 'PHPMailer cLass is loaded');
        $this->mail = new PHPMailer\PHPMailer\PHPMailer();
        $this->mail->isSMTP();
        // Konfigurasi SMTP dan pengaturan lainnya
    }

    // public function load()
    // {
    //     require_once APPPATH . 'libraries\PHPMailer\src\PHPMailer.php';
    //     require_once APPPATH . 'libraries\PHPMailer\src\SMTP.php';
    //     require_once APPPATH . 'libraries\PHPMailer\src\Exception.php';

    //     $mail = new PHPMailer;
    //     return $mail;
    // }
    public function send($to, $subject, $message, $fromEmail, $fromName)
    {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'pharaschyte@gmail.com';
            $mail->Password = 'tygeoqaygpugkban';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Recipients
            $mail->setFrom($fromEmail, $fromName);
            $mail->addAddress($to);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

}