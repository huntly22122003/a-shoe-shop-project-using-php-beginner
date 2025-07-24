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
    <title>noshoesnoprotection/giay-nice-nu</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="row"><img src="../php/images/PAH.png" class="img-fluid" alt=""></div>
</head>
<body>
    <section class="my-header fixed-top">   
        <div class="container-fluid py-1 bg-white font-weight-bold">
            <div class="row">
                <div class="col-md-2 logo">
                    <a href="../php/Welcome.php">
                        <img src="images/LOGO.webp" class="btn btn-link" width="175" height="100" class="img-fluid" alt="logo">
                    </a>
                </div>
                <div class="col-md-4">
                    <form action="../php/SearchW.php" method="get">
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
        <section class="my-brands bg-light">
            <div class = "brands">
                <div class="row">
                    <div class="col-md-3">
                    <ul>
                        <li><a ><img src="https://img.freepik.com/free-icon/adidas_318-565831.jpg" width="22" height="22" alt=""> Abis <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <div class="items-dropdown">
                                <ul>
                                   <li><a href="../Brands/AbisNam.php">Nam</a></li>
                                    <li><a href="../Brands/AbisNu.php">Nữ</a></ưli>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li><a ><img src="https://muanhanh.vn/img/2021/07/nnc-bitis.png" width="22" height="22" alt=""> Bitas <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <div class="items-dropdown">
                                    <ul>
                                        <li><a href="../Brands/BitasNam.php">Nam</a></li>
                                        <li><a href="../Brands/BitasNu.php">Nữ</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li><a ><img src="../html/images/puma.jpg" width="22" height="22" alt=""> Buma <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <div class="items-dropdown">
                                    <ul>
                                        <li><a href="../Brands/BumaNam.php">Nam</a></li>
                                        <li><a href="../Brands/BumaNu.php">Nữ</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        </div>
                    <div class="col-md-3">
                    <ul>
                        <li><a ><img src="https://w7.pngwing.com/pngs/666/302/png-transparent-swoosh-nike-logo-nike-adidas-brand-symbol-thumbnail.png" width="22" height="22" alt=""> Nice <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <div class="items-dropdown">
                                <ul>
                                    <li><a href="../Brands/NiceNam.php">Nam</a></li>
                                    <li><a href="../Brands/NiceNu.php">Nữ</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    </div>        
                </div>
            </div>
            </section>    
    </section>
    <br/>
    <section class="my-slider">
    <br/>
    <section class="my-main-products">
        <div class="container-fluid font-black py-3">
            <div class="product py-1">
                <div class="row text-uppercase text-md-center">
                    <div class="row">
                        <div class="col bg-light"></div>
                        <div class="col brand-h bg-light text-danger">Giày Nice Nữ</div>
                        <div class="col bg-light"></div>
                    </div>
                    <div class="row products">  
                        <?php
                        require '../db/connect.php';
                        $products = mysqli_query($conn, "SELECT * FROM `product` ORDER BY `id` ASC LIMIT 10 OFFSET 10");
                    $totalRecords = mysqli_query($conn, "SELECT * FROM `product`");

                            while ($row = mysqli_fetch_array($products)) { ?>
                        <div class="col left-bar"></div>
                        <div class="col category">
                            <a class="text-decoration-none" href="../php/DetailProd.php?id=<?= $row['id'] ?>&name=<?= urlencode($row['name']) ?>&price=<?= $row['price'] ?>"><img width="200" height="200" src="<?= $row['image'] ?>" title="<?= $row['name'] ?>" /></a>
                                <div onclick="check()">
                                <div onclick="check()"><a class="text-decoration-none" href="../php/DetailProd.php?id=<?= $row['id'] ?>&name=<?= urlencode($row['name']) ?>&price=<?= $row['price'] ?>">
                            <input class="add-to-cart " type="button" name="addtocart" value="ĐẶT HÀNG"></a></div>
                            </div>
                                <h1 class="script"><?= $row['name'] ?></h1>
                                <label>Giá: </label><span class="product-price"><?= number_format($row['price'], 0, ",", ".") ?> đ</span><br/>
                                
                        </div>
                        
                        <?php } ?>
                        </div>
                    </div>
                </div>    
                </div>    
            </div>
        </div>
    </section>
    <section>
        <div class="bg-black">
            1
            </div>
        </div>
    </section>
    </section>
    
    <section class="my-main-content"></section>
    <section class="my-footer bg-light">
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
        <div class="row bg-black text-white text-center">
            <div class="">copyright by @Quân,Hùng&Trung</div>
        </div>
    </section>
<?php
mysqli_close($conn);
?>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>    
</body>
</html>

