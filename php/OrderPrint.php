<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Chi tiết đơn hàng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <script src="../resources/ckeditor/ckeditor.js"></script>
    </head>
    <body>
    <?php
        require '../db/connect.php';
        session_start();
        {
            $sql = "SELECT orders.name, orders.address, orders.phone, orders.note, order_detail.*, product.name as product_name 
                    FROM orders
                    INNER JOIN order_detail ON Orders.id = order_detail.order_id
                    INNER JOIN product ON product.id = order_detail.product_id
                    WHERE orders.id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        $stmt->bind_param("i", $_GET['id']);
        $stmt->execute();
        $result = $stmt->get_result();
        $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        ?>
        <?php if (isset($orders) && !empty($orders)) { ?>
            <div class="order-print">
            <div id="order-detail-wrapper">
            <div id="order-detail">
            <h1>Chi tiết đơn hàng</h1>
            <label>Người nhận: </label><span> <?= $orders[0]['name'] ?></span><br/>
            <label>Điện thoại: </label><span> <?= $orders[0]['phone'] ?></span><br/>
            <label>Địa chỉ: </label><span> <?= $orders[0]['address'] ?></span><br/>
            <hr/>
            <h3>Danh sách sản phẩm</h3>
            <ul>
                <?php
                $totalQuantity = 0;
                $totalMoney = 0;
                foreach ($orders as $row) {
                    ?>
                    <li>
                        <span class="item-name"><?= $row['product_name'] ?></span>
                        &nbsp;<br><span class="item-quantity"> - SL: <?= $row['quantity'] ?> sản phẩm</span>
                    </li>
                    <?php
                    $totalMoney += ($row['price'] * $row['quantity']);
                    $totalQuantity += $row['quantity'];
                }
                ?>
            </ul>
            <hr/>
            <label>Tổng SL:</label> <?= $totalQuantity ?> - <label>Tổng tiền:</label> <?= number_format($totalMoney, 0, ",", ".") ?> đ
            <p><label>Ghi chú: </label><?= $orders[0]['note'] ?></p>
            </div>
        </div>
    </div>
        <?php } ?>
</html>