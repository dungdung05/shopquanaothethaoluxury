<?php
require_once '../../model/thongke/thongke.php';
$thong_ke = thong_ke_san_pham_theo_danh_muc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thống kê sản phẩm</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px 12px;
            text-align: center;
        }
        h2 {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h2>Thống kê số lượng sản phẩm theo danh mục</h2>
    <table>
        <thead>
            <tr>
                <th>ID danh mục</th>
                <th>Tên danh mục</th>
                <th>Số lượng sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($thong_ke as $row): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['ten_danh_muc'] ?></td>
                    <td><?= $row['so_luong'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
