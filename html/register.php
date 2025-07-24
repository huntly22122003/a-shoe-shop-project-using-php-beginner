<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>noshoesnoprotection/dang-ki</title>
    <link href="../style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="my-header fixed-top">
        <div class="container-fluid py-1 bg-light font-weight-bold">
            <div class="row">
                <div class="col-md-2 logo"  method ="POST">
                    <a href="../html/PJ.php">
                        <img src="images/LOGO.webp" class="btn btn-link" width="175" height="100" class="img-fluid" alt="logo">
                    </a>
                </div>
                <div class="col-md-4">
                    <form action="../html/Search.php" method="get">
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
                <div class="col-md-2 pt-4">
                    <button type="button" onclick ="check()"  class="btn btn-primary btn-outline-danger position-relative" >
                        <i class="text-white fa fa-cart-plus"></i>
                      </button>
                      <p id="CheckClick"></p>
                      <script>
                        function check() 
                        {
                            window.alert("Xin hãy đăng nhập!");
                            
                        }
                      </script>
                </div>
            </div>    
        </div>
    <section class="my-register">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-md-3">
                    <form id="form_reg" class="bg-light p-4 my-3" action="../php/Dangki.php" method="post">
                        <h2 class="py-3 text-center text-uppercase">đăng kí tài khoản</h2>
                        <div class="form-group">
                            <label for="fullname">Họ và tên</label>
                            <input type="text" name="fullname" class="form-control" id="fullname">
                        </div>
                        <div class="form-group">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" name="username" class="form-control" id="fullname">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" id="fullname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="fullname">
                        </div>
                        <div class="form-group">
                            <label for="gender">Giới tính</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" checked
                                    id="male" value="male">
                                    <label class="form-check-label" for="male">Nam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"
                                    id="female" value="female">
                                    <label class="form-check-label" for="female">Nữ</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" id="address">
                        </div>
                        <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-primary btn-block text-center mt-4" name="btn-reg" value="Đăng ký">
                        </div>
                        <span><hr></span>
                        <div class="text-center"><?php echo '<a href="../html/PJ.php">Trở về trang chủ</a>'?></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>