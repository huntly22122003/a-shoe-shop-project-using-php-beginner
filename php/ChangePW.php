<?php
require '../db/connect.php';
require '../php/CacheLost.php';

// Lưu trữ giá trị của biến a và username trong biến phiên
$a = $_SESSION['a'];
$name = $_SESSION['name'];
if(isset($_POST['name']))
{$name = $_SESSION['name'];
    $name = $_POST['name'];}

echo "Giá trị của biến a là: " . $a . $name;

// Lấy giá trị của biến password và check từ POST
if (isset($_POST['password']) && isset($_POST['check'])) {
    $password = $_POST['password'];
    $check = $_POST['check'];
    $cache = $_POST['cache'];
    if ($password == $check) {
        if($cache==$a)
        {    
            $sql = "UPDATE tbl_user SET password='$password' WHERE username='$name'";
            $result = mysqli_query($conn, $sql);
            $_SESSION["username"] = $name;
            echo "Đổi mật khẩu thành công!";
            header("Location: ../php/Welcome.php");
            exit;
        }
        else
        {
            echo "<script>alert('Mã cache không khớp với xác nhận.'); window.history.back(); </script>";
            exit;
        }
        } else {
            echo "<script>alert('Mật khẩu không khớp với xác nhận.'); window.history.back(); </script>";
            exit;
        }
    }

// Đóng phiên
session_write_close();

mysqli_close($conn);
?>
