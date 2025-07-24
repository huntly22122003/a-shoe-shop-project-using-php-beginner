<?php
require '../db/connect.php';
// Tạo kết nối đến cơ sở dữ liệu
$password = $_POST['password'];

$username=$_POST['username']; 

// Kiểm tra kết nối
if (!empty($username) && !empty($password)) {
    if (!$conn) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        // Hiển thị dữ liệu
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["username"] = $username;
        if ($row['user_type'] == 'admin') {
            header("Location: ../php/WelcomeA.php");
            exit();
        } else {
            header("Location: ../php/Welcome.php");
            exit();
        }
    } else {
        echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng.'); window.history.back(); </script>";
    }
} else {
    echo "Vui lòng nhập đầy đủ thông tin đăng nhập.";
}

// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($conn);
?>