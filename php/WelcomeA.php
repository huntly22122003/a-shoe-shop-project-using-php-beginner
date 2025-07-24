<?php
    require '../db/connect.php';
    session_start();

    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (!isset($_SESSION["username"])) {
        header("Location: ../php/DangNhap.php");
        header("Location: ../php/Welcome.php");
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
    <title>noshoesnoprotection</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="my-header">   
        <div class="container-fluid py-1 bg-white font-weight-bold">
            <div class="row">
                <div class="col-md-2 logo">
                        <img src="images/LOGO.webp" class="btn btn-link" width="175" height="100" class="img-fluid" alt="logo">
                </div>
                <div class="col-md-2 pt-3"><div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-2">
                                <div class="fs-2 text-primary">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="col-9">Xin chào<br>
                                <button type="button" id="dangnhap-bt" class="items" class="btn btn-link text-danger" class="newopweb"><?php echo $message; ?>
                                </button>
                                <?php 
                                 echo '<a href="../php/Logout.php">Đăng xuất</a>';
                                 ?>
                            </div>
                        </div>
                    </div>
                </div></div>
            </div>    
        </div>
        <div class="row">
        <section class="my-admin-page">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-md-3">
                    <form id="form_reg" class="bg-light p-4 my-3">
                        <h2 class="py-3 text-center text-uppercase bg-primary text-white">HỆ THỐNG</h2>
                        <div class="form-group">
                            <h3 class="py-2 text-center"><a class="admin-form" href="Admin.php">Đơn hàng</a> </h3>
                        </div>
                        <span><hr></span>
                        <div class="form-group">
                            <h3 class="py-2 text-center"><a class="admin-form" href="../html/LOSTMK.php">Đổi mật khẩu</a> </h3>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </section>
        </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>    
</body>
</html>

