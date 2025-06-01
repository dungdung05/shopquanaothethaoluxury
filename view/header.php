<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng mua sắm quần áo </title>
    <link rel="stylesheet" href="view/css/css.css">
</head>
<body>
    <div class="boxcenter">
        <div class="row mb header">
            <h1>Cửa hàng mua sắm quần áo</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                <li><a href="index.php?act=gopy">Góp ý</a></li>
                <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                  <input type="hidden" name="act" value="sanpham">
                 <input type="text" name="kyw" placeholder="Nhập tên sản phẩm..." value="<?php echo isset($_GET['kyw']) ? htmlspecialchars($_GET['kyw']) : ''; ?>">
                  <button type="submit">Tìm kiếm</button>
            </ul>
        </div>
