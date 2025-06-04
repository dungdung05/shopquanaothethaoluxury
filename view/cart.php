<?php
require_once './model/cart.php';

$cart = getCart();
?>

<h2>Giỏ hàng</h2>
<?php if (empty($cart)): ?>
    <p>Giỏ hàng trống.</p>
<?php else: ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID Sản phẩm</th>
            <th>Số lượng</th>
        </tr>
        <?php foreach ($cart as $productId => $quantity): ?><?php
require_once './model/cart.php';
$cart = getCart();
?>

<h2>Giỏ hàng</h2>
<?php if (empty($cart)): ?>
    <p>Không có sản phẩm nào trong giỏ.</p>
<?php else: ?>
    <table border="1">
        <tr>
            <th>ID Sản phẩm</th>
            <th>Số lượng</th>
        </tr>
        <?php foreach ($cart as $productId => $quantity): ?>
            <tr>
                <td><?= htmlspecialchars($productId) ?></td>
                <td><?= htmlspecialchars($quantity) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

            <tr>
                <td><?= htmlspecialchars($productId) ?></td>
                <td><?= htmlspecialchars($quantity) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
<a href="index.php">⬅ Quay lại mua hàng</a>
