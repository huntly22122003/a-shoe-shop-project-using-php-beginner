<?php
require "../db/connect.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
echo "Da ket noi";
echo "<pre>";
    print_r($_POST);
    session_start();
    if (isset($_POST['email'])&&isset($_POST['username'])) {
        // Lấy giá trị email từ form
        $to = $_POST['email'];
        $name=$_POST['username']; 
        $sql = "SELECT * FROM tbl_user WHERE username='$name' AND  email='$to'";
        $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) 
    {
        // Kiểm tra tính hợp lệ của địa chỉ email
        if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
            // Gửi email
            $mail = new PHPMailer(true);
            
            $random =  rand(1000, 10000);
                if (isset($_SESSION['random_number'])) {
                    unset($_SESSION['random_number']);
                    $_SESSION['random_number'] = $random; // tạo số ngẫu nhiên và lưu trữ nó trong phiên
                }
                else{$_SESSION['random_number'] = $random;}
            $a =$_SESSION['random_number'];

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
                $mail->Subject = 'Verification mail from ADH shop';
                $mail->Body    = '<h1>This is your verification code</h1><p>The code to change your password is:'.$a.'</p>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
                $mail->send();
                $_SESSION['a'] = $a;
                $_SESSION['name'] = $name;
                
                header("Location: ../html/ChangePW.html?a={$a}&name={$name}");
                session_write_close();
            } catch (Exception $e) {
                echo "Không gửi đi được...: {$mail->ErrorInfo}";
            }
        
        } else {
            echo 'Địa chỉ email không hợp lệ';
        }
    } 
    else {
    echo "<script>
        alert('Tài khoản và email không khớp!');
        window.location.href = '../html/LOSTMK.php';
    </script>";
    exit();
}
    }
?>