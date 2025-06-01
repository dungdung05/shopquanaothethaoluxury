<?php
function insert_binhluan($idpro, $iduser, $noidung) {
    $sql = "INSERT INTO binhluan (idpro, iduser, noidung, ngaybinhluan)
            VALUES (?, ?, ?, NOW())";
    pdo_execute($sql, $idpro, $iduser, $noidung);
}


function load_binhluan_theo_sp($idpro) {
    $sql = "SELECT bl.*, u.username 
            FROM binhluan bl 
            LEFT JOIN user u ON bl.iduser = u.id 
            WHERE idpro = ? 
            ORDER BY ngaybinhluan DESC";
    return pdo_query($sql, $idpro);
}

function loadAll_binhluan() {
    $sql = "SELECT bl.*, u.username 
            FROM binhluan bl 
            LEFT JOIN user u ON bl.iduser = u.id 
            ORDER BY bl.id DESC";
    return pdo_query($sql);
}
function delete_binhluan($id) {
    $sql = "DELETE FROM binhluan WHERE id = ?";
    pdo_execute($sql, $id);
}
