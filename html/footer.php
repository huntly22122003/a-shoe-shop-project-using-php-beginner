<?php
    require '../db/connect.php';

    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (!isset($_SESSION["username"])) {
        header("Location: ../php/DangNhap.php");
        exit;
    } else {
        $username = $_SESSION["username"];

        // Thực hiện truy vấn SQL để lấy thông tin người dùng
        $sql = "SELECT * FROM tbl_user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        // Kiểm tra kết quả trả về
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $message =  $row['fullname'] . " ";
        } else {
            $message = "Không tìm thấy thông tin người dùng.";
        }
    }
    mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>
<body>
    
<section class="my-footer bg-light fixed-bottom">
<section>
        <div class="bg-black">
            1
            </div>
        </div>
    </section>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="../php/Welcome.php">
                <img src="images/LOGO.webp" alt="">
                </a>
            </div>
            <div class="col-md-3 footer-col font-weight-bold text-dark position-relative title beforPre">
                <h5 class="font-weight-bold text-uppercase position-relative title beforPre">thông tin liên hệ</h5>
                <div class="footer-col__content text-dark">
                    <p>Địa chỉ: 01 Võ Văn Ngân,Thủ Đức,TP HCM</p>
                    <p>Email: adopthippo@gmail.com</p>
                    <p>Hotline: 1900.1323</p>
                </div>
            </div>
            <div class="col-md-3 footer-col font-weight-bold text-dark position-relative title beforPre">
                <h5 class="font-weight-bold text-uppercase text-dark position-relative title beforPre">chính sách</h5>
                <div class="footer-col__content "><p><a class="text-decoration-none" href="../php/Orderhis.php">Tra cứu đơn hàng</a></p>
                    <p>Hotline hỗ trợ đơn hàng: 1900.1323</p>
                </div>
            </div>
            <div class="col-md-3 footer-col font-weight-bold text-dark position-relative title beforPre">
                <h5 class="font-weight-bold text-uppercase text-dark position-relative title beforPre">Hỗ trợ</h5>
                <div class="footer-col__content text-dark"><p><a class="text-decoration-none" href="../php/Tuyen-dung.php">Tuyển dụng</a></p>
                    <div class="footer-col__content text-dark"><p><a class="text-decoration-none" href="../php/About.php">Giới Thiệu</a></p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row bg-black text-white">
            <div class="text-center">copyright by @Quân,Hùng</div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>