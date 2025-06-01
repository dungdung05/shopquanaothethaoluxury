<?php
require_once 'pdo.php';

function thong_ke_san_pham_theo_danh_muc() {
    $sql = "SELECT dm.id, dm.ten_danh_muc, COUNT(sp.id) AS so_luong
            FROM danhmuc dm
            LEFT JOIN sanpham sp ON sp.id_danh_muc = dm.id
            GROUP BY dm.id, dm.ten_danh_muc";
    return pdo_query($sql);
}
?>
