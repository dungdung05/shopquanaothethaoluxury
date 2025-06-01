<?php
    include_once "../model/danhmuc.php"; 
    $dsdm = loadall_danhmuc(); 
?>
<?php

?>
<div class="row mb">
    <div class="boxtitle">Tài khoản</div>
    <div class="boxcontent formtaikhoan">
        <form action="index.php?act=dangnhap" method="post">
            <div class="row mb10">
                <input type="text" name="user" id="" placeholder="Tên đăng nhập">
            </div>
            <div class="row mb10">
                <input type="password" name="pass" id="" placeholder="Mật khẩu">
            </div>
            <div class="row mb10">
                <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?
            </div>
            <div class="row mb10">
                <input type="submit" value="Đăng nhập" name="dangnhap">
            </div>
        </form>
        <li><a href="#">Quên mật khẩu</a></li>
        <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
    </div>
</div>

<div class="row mb">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menudoc">
       <ul>
    <?php
    if (isset($dsdm) && is_array($dsdm)) {
        foreach ($dsdm as $dm) {
            extract($dm);
            $linkdm = "index.php?act=sanpham&iddm=" . $id;
            echo '<li><a href="' . $linkdm . '">' . $tenloai . '</a></li>';
        }
    } else {
        echo "<li>Không có danh mục nào.</li>";
    }
    ?>
</ul>

    </div>
</div>
