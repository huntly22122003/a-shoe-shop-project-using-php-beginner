<?php
    require '../db/connect.php';
    session_start();

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
            $message =  $row['fullname'];
            $email =  $row['email'];
            $gender =  $row['gender'];
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
    <title>noshoesnoprotection/info</title>
</head>
<body>
<section class="my-header">   
        <div class="container-fluid py-1 bg-white font-weight-bold">
            <div class="row">
                <div class="col-md-2 logo">
                    <a href="../php/Welcome.php">
                        <img src="images/LOGO.webp" class="btn btn-link" width="175" height="100" class="img-fluid" alt="logo">
                    </a>
                </div>
                <div class="col-md-4">
                    <form action="SearchW.php" method="get">
                    <div class="col pt-4"> <div class="input-group mb-3">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Nhập để tìm kiếm..." aria-label="Nhập để tìm kiếm..." aaria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" name="buttonsearch" type="submit" id="button-addon2"><i class="fa fa-magnifying-glass"></i></button>
                  </div></div>
                    </form>
                    </div>
                  <div class="col-md-2 pt-3"><div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-2">
                                <div class="fs-2 text-primary">
                                    <i class="fa fa-headset"></i>
                                </div>
                            </div>
                            <div class="col-9">Liên Hệ <br>
                                <strong class="text-danger">0123456789</strong>
                            </div>
                        </div>
                    </div>
                </div></div> 
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
                                <script>
                                document.getElementById("dangnhap-bt").addEventListener("click", function(){
                                    window.location.href = "../html/CusInfo.php"; // Thay thế URL của trang web cần chuyển đến vào đây
                                });
                                </script>
                                </button>
                                <?php 
                                 echo '<a href="../php/Logout.php">Đăng xuất</a>';
                                 ?>
                            </div>
                        </div>
                    </div>
                </div></div>
                <div class="col-md-2 pt-4">
                <button type="button" class="btn btn-primary btn-outline-danger position-relative" onclick="redirectTo('../php/Addtocart.php')">
                <i class="text-white fa fa-cart-plus"></i>
                <script>
                    function redirectTo(url) {
                            window.location.href = " ../php/Addtocart.php";
                    }
                </script>
                </button>
            </div>    
        </div>  
    </section>
    <section class="info">
    <div class="container py-2">
    <div class="row">
        <div class="col py-2"><div class="row"><th><h3>Thông tin tài khoản</h3></th></div>
        <div class="row">
            <div class="col">
            <th><strong>Tên tài Khoản:</strong>  <?php echo $message; ?></th>
            <div class="col"><th><strong>Giới Tính:</strong>  <?php echo $gender; ?> </th></div>
            <div class="col"><th><strong>Email:</strong>  <?php echo $email; ?></th></div>
            <hr>
        </div>
        
        <div class="row py-2">
                <?php
                    echo '<br> <a href="../php/Orderhis.php">Lịch sử đơn hàng</a>';
                    echo '<br> <a href="../php/Welcome.php">Trở về trang chủ</a>';
                ?>
        </div>
        
            
        
        </div></div>
        <div class="col"></div>
    </div>
    </div>
    </section>
    <?php
    require '../html/footer.php';
    ?>
</body>
</html>