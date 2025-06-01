<?php
session_start();
include "model/pdo.php";
include "view/sanpham/sanpham.php";

// Lấy sản phẩm trong giỏ hàng
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Lấy thông tin chi tiết sản phẩm theo id trong giỏ hàng
$products_in_cart = [];
$total_price = 0;
foreach ($cart as $id => $qty) {
    $product = loadone_sanpham($id);
    if ($product) {
        $product['qty'] = $qty;
        $product['subtotal'] = $qty * $product['price'];
        $products_in_cart[] = $product;
        $total_price += $product['subtotal'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giỏ hàng</title>
    <style>
        table { width: 80%; margin: auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: center; }
        img { width: 80px; }
        .btn { padding: 5px 10px; background-color: #007bff; color: white; border: none; cursor: pointer; }
        .btn:hover { background-color: #0056b3; }
        .remove { color: red; cursor: pointer; }
        .container { width: 90%; margin: 20px auto; }
        h2 { text-align: center; }
    </style>
</head>
<body>
<div class="container">
    <h2>Giỏ hàng của bạn</h2>
    <?php if (empty($products_in_cart)) : ?>
        <p>Giỏ hàng trống!</p>
        <a href="index.php">Quay lại mua hàng</a>
    <?php else : ?>
        <form method="post" action="giohang.php">
            <table>
                <thead>
                    <tr>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products_in_cart as $item) : ?>
                    <tr>
                        <td><img src="upload/<?= htmlspecialchars($item['img']) ?>" alt=""></td>
                        <td><?= htmlspecialchars($item['name']) ?></td>
                        <td><?= number_format($item['price'], 0, ',', '.') ?> đ</td>
                        <td>
                            <input type="number" name="qty[<?= $item['id'] ?>]" value="<?= $item['qty'] ?>" min="1" style="width:50px;">
                        </td>
                        <td><?= number_format($item['subtotal'], 0, ',', '.') ?> đ</td>
                        <td><a href="giohang.php?action=delete&id=<?= $item['id'] ?>" class="remove" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" style="text-align: right;"><strong>Tổng cộng:</strong></td>
                        <td colspan="2"><strong><?= number_format($total_price, 0, ',', '.') ?> đ</strong></td>
                    </tr>
                </tfoot>
            </table>
            <br>
            <button type="submit" name="update_cart" class="btn">Cập nhật giỏ hàng</button>
            <a href="index.php" class="btn" style="text-decoration:none;">Tiếp tục mua hàng</a>
        </form>
    <?php endif; ?>
</div>
</body>
</html>
