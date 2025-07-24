<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';


if (isset($_POST['email_connect'])) {
    // Lấy giá trị email từ form
    $to = $_POST['email_connect'];
  
    // Kiểm tra tính hợp lệ của địa chỉ email
    if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
        // Gửi email
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'sasukeholy@gmail.com';                 //SMTP username
            $mail->Password   = 'stbutlhdnwqtvoqn';                   //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('sasukeholy@gmail.com', 'ADH shop');
            $mail->addAddress($to);                                     //Add a recipient
            $mail->addReplyTo('info@example.com', 'Information');

            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = 'Discount mail from ADH shop';
            $random_code = sprintf("%06d", rand(100000, 999999));
            $mail->Body = '<h1>Thanks for your participation</h1><p>The code discharge 40% is ' . $random_code . ' (only when you shopping online)</p>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Đã gửi mail thành công...';
            header("Location: ../html/PJ.php");
        } catch (Exception $e) {
            echo "Không gửi đi được...: {$mail->ErrorInfo}";
        }
    } else {
        echo 'Địa chỉ email không hợp lệ';
    }
}
?>