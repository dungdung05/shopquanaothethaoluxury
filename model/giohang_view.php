<?php
session_start();
include "model/pdo.php";  // giả sử bạn có file kết nối CSDL
include "model/sanpham.php"; // giả sử bạn có hàm lấy sản phẩm

$cart = $_SESSION['cart'] ?? [];

?>

<h2>Giỏ hàng của bạn</h2>

<?php if (empty($cart)): ?>
    <p>Giỏ hàng trống.</p>
<?php else: ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Hành động</th>
        </tr>

        <?php 
        $total = 0;
        foreach ($cart as $idpro => $soluong):
            $product = loadone_sanpham($idpro); // Hàm lấy chi tiết sản phẩm theo id
            $thanhtien = $product['giasp'] * $soluong;
            $total += $thanhtien;
        ?>
        <tr>
            <td><?= htmlspecialchars($product['tensp']) ?></td>
            <td><?= number_format($product['giasp']) ?> đ</td>
            <td><?= $soluong ?></td>
            <td><?= number_format($thanhtien) ?> đ</td>
            <td>
                <a href="giohang_xoa.php?id=<?= $idpro ?>" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="3"><strong>Tổng cộng:</strong></td>
            <td colspan="2"><strong><?= number_format($total) ?> đ</strong></td>
        </tr>
    </table>
<?php endif; ?>
