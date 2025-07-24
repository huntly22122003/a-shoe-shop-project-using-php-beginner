<?php
    require '../db/connect.php';
    mysqli_close($conn);
    $a=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>noshoesnoprotection/chi-tiet-san-pham</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="Detail-prod"></section>
<section class="my-header">   
        <div class="container-fluid py-1 bg-white font-weight-bold">
            <div class="row">
                <div class="col-md-2 logo">
                    <a href="../html/PJ.php">
                        <img src="images/LOGO.webp" class="btn btn-link" width="175" height="100" class="img-fluid" alt="logo">
                    </a>
                </div>
                    <div class="col-md-4">
                    <form action="Search.php" method="get">
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
                                <button type="button" id="dangnhap-bt" class="items" class="btn btn-link text-danger" class="newopweb"><a href="../html/Login.php" class="text-decoration-none">Đăng nhập</a></button>
                            </div>
                        </div>
                    </div>
                </div></div>
                <div class="col-md-2 pt-4">
                <button type="button" onclick ="check()"  class="btn btn-primary btn-outline-danger position-relative" >
                    <i class="text-white fa fa-cart-plus"></i>
                  </button>
                  <script>
                    function check() 
                    {
                        window.alert("Xin hãy đăng nhập!");
                    }
                    
                  </script>
                </div>
            </div>    
        </div>  
    </section>
            <?php
                require '../db/connect.php';
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    // Thực hiện truy vấn SQL và kiểm tra giá trị trả về
                    $result = mysqli_query($conn, "SELECT * FROM `product` WHERE `id` = ".$_GET['id']);
                    if ($result) {
                        $product = mysqli_fetch_assoc($result);
                        $a=1;
                    } else {
                        // Xử lý lỗi truy vấn hoặc thông báo cho người dùng biết
                        echo "Lỗi truy vấn SQL: " . mysqli_error($conn);
                    }
                } else {
                    // Xử lý lỗi hoặc thông báo cho người dùng biết
                    echo "ID không hợp lệ";
                }
            ?>
            <h2><div class="bg-secondary text-center">CHI TIẾT SẢN PHẨM</div></h2>
        <div class="container ct">
            <div class="product-detail py-4"> 
            <?php if ($a==1): ?>
            <div class="product-img"><img width="300" height="300" src="<?= $product['image'] ?>"/></div>
            <div class="product-info">
                <h2 class="script"><strong>Tên sản phẩm: <?= $product['name'] ?></strong></h2>
                <hr>
                <div >
                        <input type="text" value="1" name="quantity[<?=$product['id']?>]">
                        <input onclick="check()" type="submit" value="Đặt hàng" name="">
                </div>
                <label class="py-1"><strong>Giá: </strong></label><span class="product-price text-danger">
                                            <?= number_format( $product['price'], 0, ",", ".") ?> đ</span><br/>
                <hr>
                <div><strong>Mô tả: </strong><?= $product['content'] ?></div>
                <div class="py-5"></div>
                <hr>
                <div>Trở về trang chủ <a href="../html/PJ.php"> Nhấn vào đây!</a></div>
            </div>
            <?php else: ?>
            <?php endif; ?>
            </div>
            
        </div>
<div class="row fixed-bottom">
<section class="my-discount">
        <div class="container-fluid">
    <div class="row bg-dark">
        <div class="col-md-6 font-weight-bold text-center text-white pt-3">
                Nhập Email để nhận ưu đãi đến từ Adopt Hippo
            </div>
            <div class="col-md-6">
                <form action="../php/SendMail.php" method="POST">
                    <div class="input-group mb-4 pt-2">
                      <input type="text" class="Nhập Email" placeholder="Nhập Email" id="email_connect" name="email_connect" >
                      <button class="btn btn-secondary btn-outline-primary text-white" type="submit" id="Sign-in"> Đăng kí <i class="fa fa-user-plus"></i></button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
    </section>
    <section class="my-main-content"></section>
    <section class="my-footer bg-light">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="../html/PJ.php">
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
                <div class="footer-col__content "><p><a class="text-decoration-none" onclick ="check()" href="">Lịch sử đơn hàng</a></p>
                    <p>Hotline hỗ trợ đơn hàng: 1900.1323</p>
                </div>
            </div>
            <div class="col-md-3 footer-col font-weight-bold text-dark position-relative title beforPre">
                <h5 class="font-weight-bold text-uppercase text-dark position-relative title beforPre">Hỗ trợ</h5>
                <div class="footer-col__content text-dark"><p><a class="text-decoration-none" href="../html/Tuyen-dung.html">Tuyển dụng</a></p>
                    <div class="footer-col__content text-dark"><p><a class="text-decoration-none" href="../html/About.html">Giới Thiệu</a></p>
                </div>
            </div>
        </div>
        </div>
        <div class="row bg-black text-white text-center">
            <div class="">copyright by @Quân,Hùng</div>
        </div>
    </section>
</div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>