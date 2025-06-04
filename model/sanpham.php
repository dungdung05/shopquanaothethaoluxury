<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        if (!empty($giasp) && is_numeric($giasp)) {
            $giasp = (float)$giasp;
        } else {
            $giasp = 0; // Hoặc giá trị mặc định
        }
        $sql= "INSERT INTO `sanpham` (`name`,`price`,`img`,`mota`,`iddm`) VALUES('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql="DELETE FROM `sanpham` WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham_home(){
        $sql="SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 0,9";
        $listsanpham= pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_top10(){
        $sql="SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 0,10";
        $listsanpham= pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql="SELECT * FROM sanpham WHERE 1";
        if($kyw!=""){
            $sql.=" AND `name` LIKE '%".$kyw."%' ";
        }
        if($iddm>0){
            $sql.=" AND `iddm`='".$iddm."' ";
        }
        $sql.=" ORDER BY id DESC";
        $listsanpham= pdo_query($sql);
        return $listsanpham;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="SELECT * FROM danhmuc WHERE id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }
    function loadone_sanpham($id){
        $sql="SELECT * FROM sanpham WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql="SELECT * FROM sanpham WHERE iddm=".$iddm." AND id <>".$id;
        $listsanpham= pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
        if($hinh!=""){
            $sql= "UPDATE `sanpham` SET `name` = '".$tensp."',`iddm` = '".$iddm."',`price` = '".$giasp."',`mota` = '".$mota."',`img` = '".$hinh."' WHERE `sanpham`.`id` ='$id'";
        }else{
            $sql= "UPDATE `sanpham` SET `name` = '".$tensp."',`iddm` = '".$iddm."',`price` = '".$giasp."',`mota` = '".$mota."' WHERE `sanpham`.`id` ='$id'";
        }
        pdo_execute($sql);
    }
    function getAllSanpham() {
    $sql = "SELECT * FROM sanpham ORDER BY id DESC";
    return pdo_query($sql);
    }

    function searchSanpham($keyword) {
    $sql = "SELECT * FROM sanpham WHERE name LIKE ?";
    return pdo_query($sql, ['%' . $keyword . '%']);
    }

?>