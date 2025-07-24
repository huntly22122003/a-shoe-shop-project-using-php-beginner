<?php
session_start(); // Khởi động phiên
session_destroy(); // Xóa tất cả các biến phiên và kết thúc phiên đăng nhập
header("Location:../html/PJ.php"); // Chuyển hướng người dùng đến trang đăng nhập
exit();
?>