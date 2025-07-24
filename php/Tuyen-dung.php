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
<html>
<head>
	<title>Tuyển dụng</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

	<!-- Header -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Tuyển dụng</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#quản-lí">Tuyển dụng quản lí</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#nhân-viên">Tuyển dụng nhân viên bán hàng</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Quản lý -->
	<div class="container" id="quản-lí">
		<h2>Tuyển dụng quản lí</h2>
		<p>Chúng tôi đang tìm kiếm một quản lí tài năng để tham gia vào đội ngũ của chúng tôi.</p>
		<h3>Công việc của bạn:</h3>
		<ul>
			<li>Quản lý và điều hành cửa hàng</li>
			<li>Tiếp nhận, kiểm tra và quản lý hàng hóa</li>
			<li>Giám sát doanh số bán hàng và lợi nhuận</li>
			<li>Phân tích và đề xuất các chiến lược kinh doanh mới</li>
		</ul>
		<h3>Yêu cầu:</h3>
		<ul>
			<li>Có kinh nghiệm làm việc trong ngành bán lẻ hoặc các vị trí quản lí tương tự</li>
			<li>Tốt nghiệp đại học hoặc chứng chỉ liên quan</li>
			<li>Có khả năng làm việc độc lập và trong nhóm</li>
		</ul>
	</div>
    <br>
    <hr>
    <br>

	<!-- Nhân viên bán hàng -->
	<div class="container" id="nhân-viên">
		<h2>Tuyển dụng nhân viên bán hàng</h2>
		<p>Chúng tôi đang tìm kiếm những nhân viên bán hàng tài năng để gia nhập đội ngũ của chúng tôi.</p>
		<h3>Công việc của bạn:</h3>
		<ul>
			<li>Phục vụ khách hàng và giới thiệu sản phẩm</li>
			<li>Hỗ trợ khách hàng trong quá trình mua hàng và đổi trả</li>
			<li>Giữ gìn và sắp xếp hàng hóa trong cửa hàng</li>
			<li>Thực hiện các tác vụ khác theo yêu cầu của quản lí</li>
		</ul>
		<h3>Yêu cầu:</h3>
		<ul>
			<li>Có khả năng giao tiếp và tư vấn sản phẩm tốt</li>
			<li>Có kinh nghiệm làm việc trong ngành bán lẻ là một lợi thế</li>
			<li>Có khả năng làm việc độc lập và trong nhóm</li>
		</ul>
	</div>
    <div class="container">
        <p><h3>Liên hệ:</h3></p>
        <p><a href="../php/Welcome.php"><img decoding="async" loading="lazy" width="350" height="250" class="wp-image-1394 lazy-load-active" src="images/LOGO.webp"></a></p>
        <p>Giới thiệu &amp; Liên Hệ</p>
        <p>Số điện thoại: 0123.456.789</p>
        <p>Địa Chỉ: Số 1 Võ Văn Ngân, Tp. Thủ Đức, Tp. Hồ Chí Minh.</p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>    
</body>
</html>