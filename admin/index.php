<?php
include "../model/pdo.php";
 include "header.php";  
include "../model/binhluan.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
 if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'adddm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insrt_danhmuc($tenloai);
                $sql="insert into danhmuc (tenloai) values('$tenloai')";
                pdo_execute($sql);
                $thongbao="Thêm thành công";
            }
            
             include "danhmuc/add.php";
            break;
        
             case 'lisdm':
                
                $listdanhmuc=loadall_danhmuc();
             include "danhmuc/list.php";
            break;
             
            case 'listsp':
    if (isset($_POST['listok']) && ($_POST['listok'])) {
        $kyw = $_POST['kyw'];
        $iddm = $_POST['iddm'];
    } else {
        $kyw = '';
        $iddm = 0;
    }
    $listdanhmuc = loadall_danhmuc();
    $listsanpham = loadall_sanpham($kyw, $iddm);
    include "sanpham/list.php";
    break;

         case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
               delete_danhmuc($tenloai);
              
            }
           
                $listdanhmuc=loadall_danhmuc($_GET['id']);
             include "danhmuc/list.php";
            break;
               
           case 'dskh':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $listtaikhoan = loadall_taikhoan($id); 
    include "taikhoan/list.php"; 
    break;


            case 'suadm':
         if(isset($_GET['id'])&&($_GET['id']>0)){
           
            $dm=loadone($id);
         }
            
            include "danhmuc/update.php";
            break;
           
                  case 'updatedm':
    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $tenloai = $_POST['tenloai'];
        $id = $_POST['id'];
        update_danhmuc($id, $tenloai);
        $thongbao = "Cập nhật thành công!";
    }
    $listdanhmuc = loadall();
    include "danhmuc/list.php";
    break;
      
 case 'dangky':
    if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        insert_taikhoan($email, $user, $pass);

        $thongbao = "Đăng ký thành công. Vui lòng đăng nhập để thực hiện bình luận hoặc đặt hàng!";
    }
    include "view/taikhoan/dangky.php";
    break;
    case 'dangnhap':
    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $checkuser = checkuser($user, $pass);
        if (is_array($checkuser)) {
            $_SESSION['user'] = $checkuser;
            $thongbao = "Đăng nhập thành công!";
            header("Location: index.php");
        } else {
            $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
        }
    }
    include "view/taikhoan/dangky.php";
    break;



            case 'dsbl':
               $listbinhluan=loadall_binhluan(0);
               include "binhluan/list.php";
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