<?php

require '../db/connect.php';

if(isset($_POST['btn-reg'])){ echo "<pre>";

print_r($_POST);

    $username=$_POST['username']; 
    $fullname =$_POST['fullname'];
    $password=$_POST['password'];
    $email = $_POST['email'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];

// PHP MASTER => unitop.vn

if (!empty($username) && !empty($fullname) && !empty($password) && !empty($email) && !empty($address) && !empty($gender))
    {   
    echo "<pre>";
    print_r($_POST);
     $sql = "INSERT INTO `tbl_user`(`fullname`,`password`,`email`,`address`,`username`,`gender`) VALUE('$fullname','$password','$email','$address','$username','$gender')";
     if($conn ->query($sql)===TRUE)
     {  
        header("Location: ../html/PJ.php");
        echo "<script>alert('Thêm dữ liệu thành công');</script>";
        exit;
     }
     else
     {
        echo "<script>alert('Lỗi dữ liệu.'); window.history.back(); </script>";
     }
    } 
    else 
    {
        echo "Bạn cần nhập đầy đủ thông tin trước khi đăng ký ";
    }

 }  ?>

 
