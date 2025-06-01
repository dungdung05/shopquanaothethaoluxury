<?php
session_start();

// Khởi tạo giỏ hàng nếu chưa tồn tại
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Thêm sản phẩm vào giỏ hàng
if (isset($_GET['action']) && $_GET['action'] == 'add') {
    $id = $_GET['id']; // id sản phẩm thêm
    $qty = isset($_GET['qty']) ? intval($_GET['qty']) : 1;

    // Nếu sản phẩm đã tồn tại trong giỏ thì tăng số lượng
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] += $qty;
    } else {
        $_SESSION['cart'][$id] = $qty;
    }
    header("Location: giohang_view.php");
    exit;
}

// Xóa sản phẩm khỏi giỏ hàng
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
    header("Location: giohang_view.php");
    exit;
}

// Cập nhật số lượng sản phẩm trong giỏ hàng
if (isset($_POST['update_cart'])) {
    foreach ($_POST['qty'] as $id => $qty) {
        if ($qty <= 0) {
            unset($_SESSION['cart'][$id]);
        } else {
            $_SESSION['cart'][$id] = $qty;
        }
    }
    header("Location: giohang_view.php");
    exit;
}
?>
