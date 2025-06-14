<?php 

     session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "header.php";
    include "check_admin.php";
    include "../model/binhluan.php";
 
    
 

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case 'adddm':
               
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai= $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công!";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc= loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $sql="SELECT * FROM `danhmuc` ORDER BY id DESC";
                $listdanhmuc= pdo_query($sql);
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai= $_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($tenloai,$id);
                    $thongbao="Cập nhật thành công!";
                }
                $listdanhmuc= loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                /* controller sản phẩm */
                case 'addsp':
                    // kiểm tra người dùng có click vào nút add hay không
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddm= $_POST['iddm'];
                        $tensp= $_POST['tensp'];
                        $giasp= $_POST['giasp'];
                        $mota= $_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        }else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                        $thongbao="Thêm thành công!";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/add.php";
                    break;
                case 'listsp':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw=$_POST['kyw'];
                        $iddm=$_POST['iddm'];
                    }else{
                        $kyw="";
                        $iddm = 0;
                    }
                    $listdanhmuc= loadall_danhmuc();
                    $listsanpham= loadall_sanpham($kyw,$iddm);
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $sql="SELECT * FROM `sanpham` ORDER BY id DESC";
                    $listsanpham= loadall_sanpham("",0);
                    include "sanpham/list.php";
                    break;
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham=loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc= loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
                         
                case 'updatesp':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $iddm= $_POST['iddm'];
                        $tensp= $_POST['tensp'];
                        $giasp= $_POST['giasp'];
                        $mota= $_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            
                        }else {
                           
                        }
                        update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                        $thongbao="Cập nhật thành công!";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham= loadall_sanpham("",0);
                    include "sanpham/list.php";
                    break;
            case 'dskh':
                $listtaikhoan= loadall_taikhoan();
                include "view/taikhoan/list.php";
                break;
            case 'xoatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan= loadall_taikhoan();
                include "../view/taikhoan/list.php";
                break;  
                case 'dsbl':
                $listbl = loadAll_binhluan();
                include "../view/binhluan/list.php";
                break;

               case 'xoabl':
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_binhluan($_GET['id']);
    }
    $listbl = loadAll_binhluan();  
    include "view/binhluan/list.php";
    break;

          case 'donhang':
    $listdanhmuc= loadall_donhang(); 
    include "donhang/list.php";
    break;

        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
