<?php
require '../db/connect.php';
session_start();


// Lấy danh sách đơn hàng của người dùng
$sql = "SELECT * FROM `orders` ORDER BY `id` DESC";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>noshoesnoprotection/admin-page</title>
</head>
<body>
<section class="my-header">   
        <div class="container-fluid py-1 bg-white font-weight-bold">
            <div class="row">
                <div class="col-md-2 logo">
                        <img src="images/LOGO.webp" width="175" height="100" class="img-fluid" alt="logo"> 
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
                                <button type="" id="dangnhap-bt" class="items" class="btn btn-link text-danger" class="newopweb">Admin</button>
                                <?php 
                                 echo '<a href="../php/Logout.php">Đăng xuất</a>';
                                 ?>
                            </div>
                        </div>
                    </div>
                </div></div>   
        </div>  
    </section>
    <h2><div class="bg-primary text-center text-white">LỊCH SỬ ĐƠN HÀNG</div></h2>
    <div class="row">
    <form method="POST" action="OrderSearch.php?action=search">
    <tr>
        <fieldset>
            <legend>Tìm kiếm đơn hàng:</legend>
        <td>
            <label for="" class="form-label">ID:</label>
            <input type="text" class="input-group-sm mb-1" id="id" name="id" aria-describedby="">
        </td>
        <td>
            <label for="" class="form-label">Tên người nhận:</label>
            <input type="text" class="input-group-sm mb-1" id="name" name="name">
        </td>
        <td class="pt-1">
            <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
        </td>
        </fieldset>   
    </tr>
    </form>
    </div>
    <div class="row inline-table">
    <table class="tbl" border="1" style="border-collapse: collapse;">
        <div class="container">
        <tr>
            <th>ID</th>
            <th>Tên người nhận</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>In đơn</th>
        </tr>                    
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['address']?></td>
            <td><?=$row['phone']?></td>
            <td><a href="OrderPrint.php?id=<?=$row['id']?>" target="_blank">In đơn</a></td>
        </tr> 
        <?php } ?>
        </div>
    </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>