<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['add_to_cart'])) {
    $idpro = $_POST['idpro'];
    $soluong = intval($_POST['soluong']);

    if ($soluong <= 0) $soluong = 1;

    if (isset($_SESSION['cart'][$idpro])) {
        $_SESSION['cart'][$idpro] += $soluong;
    } else {
        $_SESSION['cart'][$idpro] = $soluong;
    }

    header("Location: giohang_view.php");
    exit;
}
?>
