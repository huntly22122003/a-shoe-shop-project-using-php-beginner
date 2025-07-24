<?php
    require '../db/connect.php';
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
    <!-- <style>
        body {
            background-image: url("https://png.pngtree.com/png-clipart/20200224/original/pngtree-sneakers-vector-seamless-pattern-png-image_5242435.jpg");
        }
    </style> -->
    <section class="my-header fixed-top">   
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
                                <button type="button" id="dangnhap-bt" class="items" class="btn btn-link text-danger" class="newopweb"><?php echo '<a href="../html/Login.php" class="text-decoration-none">Đăng nhập</a>'; ?></button>
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
        <section class="my-brands bg-light">
            <div class = "brands">
                <div class="row">
                    <div class="col-md-3">
                    <ul>
                        <li><a ><img src="https://img.freepik.com/free-icon/adidas_318-565831.jpg" width="22" height="22" alt=""> Abis <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <div class="items-dropdown">
                                <ul>
                                   <li><a href="../BrandsL/AbisNamL.php">Nam</a></li>
                                    <li><a href="../BrandsL/AbisNuL.php">Nữ</a></ưli>
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
                                        <li><a href="../BrandsL/BitasNamL.php">Nam</a></li>
                                        <li><a href="../BrandsL/BitasNuL.php">Nữ</a></li>
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
                                        <li><a href="../BrandsL/BumaNamL.php">Nam</a></li>
                                        <li><a href="../BrandsL/BumaNuL.php">Nữ</a></li>
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
                                    <li><a href="../BrandsL/NiceNamL.php">Nam</a></li>
                                    <li><a href="../BrandsL/NiceNuL.php">Nữ</a></li>
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
        <div class="container-fluid">
    <div class="row sliders">
        <div class="col"></div>
        <div class="col-7">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/chuyengiaysneaker-com-giay-nike-air-force-1-day-thung-sieu-cap-88-.jpg" width="975" height="515" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/giay-sneaker-mlb-bigball-hogo-like-auth1212-400x400.jpg" width="975" height="515" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/giay-sneaker-mlb-bigball-hogo-like-auth77.jpg" width="975" height="515" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  
                </button>
              </div>
        </div>
        <div class="col"></div>
    </div></div>
    <br/>
    <section class="my-main-products">
        <div class="container-fluid font-black py-3">
            <div class="product py-1">
                <div class="row  text-md-center">
                    <div class="row">
                        <div class="col bg-light"></div>
                        <div class="col brand-h bg-light text-uppercase text-danger">Bán chạy</div>
                        <div class="col bg-light"></div>
                    <div class="row products">  
                        <?php
                        
                    $products = mysqli_query($conn, "SELECT * FROM `product` ORDER BY RAND() LIMIT 5");
                    $totalRecords = mysqli_query($conn, "SELECT * FROM `product`");

                            while ($row = mysqli_fetch_array($products)) { ?>
                        <div class="col category">
                        <a class="text-decoration-none" href="../html/DetailProduct.php?id=<?= $row['id'] ?>
                            &name=<?= urlencode($row['name']) ?>&price=<?= $row['price'] ?>">
                            <a class="text-decoration-none" href="../html/DetailProduct.php?id=<?= $row['id'] ?>
                            &name=<?= urlencode($row['name']) ?>&price=<?= $row['price'] ?>">
                            <img width="200" height="200" src="<?= $row['image'] ?>" title="<?= $row['name'] ?>" /></a></a>
                            <div onclick="check()"><input class="add-to-cart" type="button" name="addtocart" value="ĐẶT HÀNG">
                            </div>
                            <h1 class="script"><?= $row['name'] ?></h1>
                            <label>Giá: </label><span class="product-price"><?= number_format($row['price'], 0, ",", ".") ?> đ</span><br/>
                        </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>  
                </div>
                <div class="row text-uppercase text-md-center ">
                    <div class="row">
                        <div class="col bg-light"></div>
                        <div class="col brand-h bg-light">Giày Abis</div>
                        <div class="col bg-light"></div>
                        <div class="row products">  
                        <?php
                        
                    $products = mysqli_query($conn, "SELECT * FROM `product` ORDER BY `id` ASC LIMIT 5 OFFSET 20");
                    $totalRecords = mysqli_query($conn, "SELECT * FROM `product`");

                            while ($row = mysqli_fetch_array($products)) { ?>
                        <div class="col category">
                            <a class="text-decoration-none" href="../html/DetailProduct.php?id=<?= $row['id'] ?>&name=<?= urlencode($row['name']) ?>&price=<?= $row['price'] ?>">
                            <img width="200" height="200" src="<?= $row['image'] ?>" title="<?= $row['name'] ?>" /></a>
                            <div onclick="check()"><input class="add-to-cart" type="button" name="addtocart" value="ĐẶT HÀNG"></div>
                            <h1 class="script"><?= $row['name'] ?></h1>
                            <label>Giá: </label><span class="product-price"><?= number_format($row['price'], 0, ",", ".") ?> đ</span><br/>
                        </div>
                        <?php } ?>
                        </div>
                </div>
                <div class="row text-uppercase text-md-center">
                    <div class="row ">
                        <div class="col bg-light"></div>
                        <div class="col brand-h bg-light">Giày Bitas</div>
                        <div class="col bg-light"></div>
                        <div class="row products">  
                        <?php
                        
                    $products = mysqli_query($conn, "SELECT * FROM `product` ORDER BY `id` ASC LIMIT 5 OFFSET 40");
                    $totalRecords = mysqli_query($conn, "SELECT * FROM `product`");

                            while ($row = mysqli_fetch_array($products)) { ?>
                        <div class="col category">
                            <a class="text-decoration-none" href="../html/DetailProduct.php?id=<?= $row['id'] ?>&name=<?= urlencode($row['name']) ?>&price=<?= $row['price'] ?>">
                            <img width="200" height="200" src="<?= $row['image'] ?>" title="<?= $row['name'] ?>" /></a>
                            <div onclick="check()"><input class="add-to-cart" type="button" name="addtocart" value="ĐẶT HÀNG"></div>
                            <h1 class="script"><?= $row['name'] ?></h1>
                            <label>Giá: </label><span class="product-price"><?= number_format($row['price'], 0, ",", ".") ?> đ</span><br/>
                        </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row text-uppercase text-md-center">
                    <div class="row ">
                        <div class="col bg-light"></div>
                        <div class="col brand-h bg-light">Giày Buma</div>
                        <div class="col bg-light"></div>
                        <div class="row products">  
                        <?php
                        
                    $products = mysqli_query($conn, "SELECT * FROM `product` ORDER BY `id` ASC LIMIT 5 OFFSET 60");
                    $totalRecords = mysqli_query($conn, "SELECT * FROM `product`");

                            while ($row = mysqli_fetch_array($products)) { ?>
                        <div class="col category">
                            <a class="text-decoration-none" href="../html/DetailProduct.php?id=<?= $row['id'] ?>&name=<?= urlencode($row['name']) ?>&price=<?= $row['price'] ?>">
                            <img width="200" height="200" src="<?= $row['image'] ?>" title="<?= $row['name'] ?>" /></a>
                            <div onclick="check()"><input class="add-to-cart" type="button" name="addtocart" value="ĐẶT HÀNG"></div>
                            <h1 class="script"><?= $row['name'] ?></h1>
                            <label>Giá: </label><span class="product-price"><?= number_format($row['price'], 0, ",", ".") ?> đ</span><br/>
                        </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="baymau">
                <div class="row text-uppercase text-md-center">
                    <div class="row ">
                        <div class="col bg-light"></div>
                        <div class="col brand-h bg-light">Giày Nice</div>
                        <div class="col bg-light"></div>
                        <div class="row products">  
                        <?php
                        
                    $products = mysqli_query($conn, "SELECT * FROM `product` ORDER BY `id` ASC LIMIT 5 OFFSET 0");
                    $totalRecords = mysqli_query($conn, "SELECT * FROM `product`");

                            while ($row = mysqli_fetch_array($products)) { ?>
                        <div class="col category">
                            <a class="text-decoration-none" href="../html/DetailProduct.php?id=<?= $row['id'] ?>&name=<?= urlencode($row['name']) ?>&price=<?= $row['price'] ?>">
                            <img width="200" height="200" src="<?= $row['image'] ?>" title="<?= $row['name'] ?>" /></a>
                            <div onclick="check()"><input class="add-to-cart" type="button" name="addtocart" value="ĐẶT HÀNG"></div>
                            <h1 class="script"><?= $row['name'] ?></h1>
                            <label>Giá: </label><span class="product-price"><?= number_format($row['price'], 0, ",", ".") ?> đ</span><br/>
                        </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>
    
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
        <div class="row bg-black text-white">
            <div class="col-5 text-black bg-black"></div>
            <div class="col-6">copyright by @Quân,Hùng</div>
            <div class="col-1 text-black bg-black"></div>
        </div>
    </div>
    </section>
    <?php
mysqli_close($conn);
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>    
</body>
</html>