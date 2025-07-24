<?php
require '../db/connect.php';
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa và lấy thông tin người dùng
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$username'");
    $row = mysqli_fetch_assoc($result);
    $message = $row['fullname'] ?? "Không tìm thấy thông tin người dùng.";

    // Lấy ID người dùng
    $result = mysqli_query($conn, "SELECT uid FROM tbl_user WHERE username='$username'");
    $row = mysqli_fetch_assoc($result);
    $uid = $row['uid'] ?? null;
} else {
    header("Location: ../php/DangNhap.php");
    exit;
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>noshoesnoprotection/gio-hang</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
require '../db/connect.php';
        if(!isset($_SESSION["cart"])){
            $_SESSION["cart"] = array();
        }
        $error = false;
        if(isset($_GET['action'])){
            function update_cart($add = false){
                foreach ($_POST['quantity'] as $id => $quantity){
                    if($quantity == 0) {
                        unset($_SESSION["cart"] [$id]);
                        echo "<script>alert('Bạn đã xóa đơn hàng '); </script>";
                    } else {
                        if($add){
                            $_SESSION["cart"] [$id] += $quantity;
                        } else {
                            $_SESSION["cart"] [$id] = $quantity;
                        }
                    }
                    
                }
            }
            switch($_GET['action']){
                case "add":
                    update_cart();
                    break;
                case "delete":
                        if (isset($_GET['id'])) {
                          unset($_SESSION["cart"][$_GET['id']]);
                          if (count($_SESSION["cart"]) == 0) {
                            // Nếu giỏ hàng rỗng, hiển thị thông báo alert và chuyển hướng đến trang chủ
                            echo '<script>
                                    alert("Không có sản phẩm nào trong giỏ hàng!");
                                    window.location.href = " ../php/Addtocart.php";
                                  </script>';
                          }
                        }
                        break; 
                case "submit":        
                    if(isset($_POST['update_click'])){
                        update_cart();
                    } elseif(isset($_POST['order_click'])) {
                        if (empty($_POST['name'])) {
                            $error = "Bạn chưa nhập tên của người nhận";
                        } elseif (empty($_POST['phone'])) {
                            $error = "Bạn chưa nhập số điện thoại người nhận";
                        } elseif (empty($_POST['address'])) {
                            $error = "Bạn chưa nhập địa chỉ người nhận";
                        } elseif (empty($_POST['quantity'])) {
                            $error = "Giỏ hàng rỗng";
                        }
                        if ($error == false && !empty($_POST['quantity'])) { //Xử lý lưu giỏ hàng vào db
                            $products = mysqli_query($conn, "SELECT * FROM `product` WHERE `id` IN (" . implode(",", array_keys($_POST['quantity'])) . ")");
                            $total = 0;
                            $orderProducts = array();
                            while ($row = mysqli_fetch_array($products)) {
                                $orderProducts[] = $row;
                                $total += $row['price'] * $_POST['quantity'][$row['id']];
                            }
                            $insertOrder = mysqli_query($conn, "INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `note`, `total`, `uname`) VALUES (NULL, '" . $_POST['name'] . "', '" . $_POST['phone'] . "', '" . $_POST['address'] . "', '" . $_POST['note'] . "', '" . $total . "', '" . $uid . "');");
                            $orderID = $conn->insert_id;
                            $insertString = "";
                            foreach ($orderProducts as $key => $product) {
                                $insertString .= "(NULL, '" . $orderID . "', '" . $product['id'] . "', '" . $_POST['quantity'][$product['id']] . "', '" . $product['price'] . "')";
                                if ($key != count($orderProducts) - 1) {
                                    $insertString .= ",";
                                }
                            }
                            $insertOrder = mysqli_query($conn, "INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES " . $insertString . ";");
                            $success = "Đặt hàng thành công";
                            unset($_SESSION['cart']);
                        }
                    }
                    break;
            }
        }
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(!empty($_SESSION["cart"])){
            $products = mysqli_query($conn, "SELECT * FROM `product` WHERE `id` IN (".implode(",", array_keys($_SESSION["cart"])).")");
        }
            
    ?>

    
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
    <div class="row"><form id="cart-form" action="Addtocart.php?action=submit" method="POST">
    <table class="tbl"  border="1" style="border-collapse: collapse;">
    <?php if (!empty($error)) { ?> 
                <div id="notify-msg">
                    <?= $error ?>. <a href="../php/Addtocart.php">Quay lại</a>
                </div>
            <?php } elseif (!empty($success)) { ?>
                <div id="notify-msg">
                    <?= $success ?>. 
                </div>
            <?php } else { ?>
    <h1 class="bg-primary text-center text-white py-1">GIỎ HÀNG</h1>
        <tr class=bg-white>
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Xóa</th>
        </tr>
        <?php
            if (!empty($products)) {
            $total = 0;    
            $num = 1;
            if(count($_SESSION["cart"]) > 0) {
                while ($row = mysqli_fetch_array($products)) { ?>
                    <tr>
                        <th><?=$num;?></th>
                        <th><?=$row['name']?></th>
                        <th><img width="130" height="100" src="<?=$row['image'];?>" alt=""></th>
                        <th><?= number_format($row['price'], 0, ",", ".") ?></th>
                        <th><input type="text" value="<?=$_SESSION["cart"][$row['id']]?>" name="quantity[<?=$row['id'];?>]"></th>
                        <th><?= number_format($row['price'] * $_SESSION["cart"][$row['id']], 0, ",", ".") ?></th> 
                        <th><a href="Addtocart.php?action=delete&id=<?=$row['id']?>">Xóa</a></th>
                    </tr>
                    
            <?php
            $total += $row['price'] * $_SESSION["cart"][$row['id']];
            $num++;
                }?>
                    <tr class="bg-primary text-white">
                        <th>&nbsp;</th>
                        <th>Tổng tiền</th>
                        <th>&nbsp;</th> 
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th><?= number_format($total, 0, ",", ".") ?></th>
                        <th>Xóa</th>
                    </tr>
                    <?php
                }
            }
            ?>
        
    </table>
    <div id="form-button">
        <div class="row"></div>
            <div class="row py-2">
                <div class="col"><input type="submit" name="update_click" value="Cập Nhật"></div>
            </div>
            <hr>
            <div class="row">
                <div class="py-1"><label>Người nhận:</label>&nbsp;<input type="text" value="" name="name" /></div>
                <div class="py-1"><label>Điện thoại: </label>&ensp;&ensp;<input type="text" value="" name="phone" /></div>
                <br>
                <div class="py-1"><label>Địa chỉ:&ensp;&ensp;&ensp;&ensp;&ensp;  </label><input type="text" value="" name="address" /></div>
                <br>
                <div class="gc"><label>Ghi chú: </label><br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;<textarea name="note" cols="50" rows="7" ></textarea></div>
            </div>
            <hr>
            <div class="row">&nbsp;<div class="col"><input type="submit" name="order_click" value="Đặt hàng"></div></div>
            
        </div>
    </form></div>
    <?php } ?>
    </div>
    <div class="row py-3">
    <?php
        echo '<br><br>&ensp; Bạn muốn tiếp tục mua hàng chứ? &nbsp;<a href="../php/Welcome.php">Nhấp vào đây!</a>'
    ?></div>
    </div>        
                </div>
            </div>
        </section>
</div>
<section>
        <div class="bg-black">
            1
            </div>
        </div>
    </section>
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
            <div>copyright by @Quân,Hùng</div> 
        </div>
    </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>            
</body>
</html>