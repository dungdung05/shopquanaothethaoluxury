<?php
include "../model/pdo.php";
 include "header.php";  
 if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'adddm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                $sql="insert into danhmuc (tenloai) values('$tenloai')";
                pdo_execute($sql);
                $thongbao="Thêm thành công";
            }
            
             include "danhmuc/add.php";
            break;
        
             case 'lisdm':
                $sql="select * from danhmuc order by id desc";
                $listdanhmuc=pdo_query($sql);
             include "danhmuc/list.php";
            break;

         case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sql="delete from danhmuc where id=".$_GET['id'];
                pdo_execute($sql);  
            }
            $sql="select * from danhmuc order by id desc";
                $listdanhmuc=pdo_query($sql);
             include "danhmuc/list.php";
            break;

            case 'suadm':
         if(isset($_GET['id'])&&($_GET['id']>0)){
            $sql="select * from danhmuc where id=".$_GET['id'];
            $dm=pdo_query_one($sql);
         }
            
            include "danhmuc/update.php";
            break;

        default:
        include "home.php";
            # code...
            break;
    }
 }else{
    include "home.php"; 
 }
 
 include "fotter.php";
?>