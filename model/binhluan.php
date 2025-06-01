<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
    $sql = "INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) 
            VALUES('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan_admin(){
    $sql = "SELECT binhluan.*, taikhoan.user, sanpham.name AS tensp 
            FROM binhluan 
            JOIN taikhoan ON binhluan.iduser = taikhoan.id 
            JOIN sanpham ON binhluan.idpro = sanpham.id 
            ORDER BY binhluan.id DESC";
    return pdo_query($sql);
}

function delete_binhluan($id){
    $sql = "DELETE FROM binhluan WHERE id = '$id'";
    pdo_execute($sql);
}
?>