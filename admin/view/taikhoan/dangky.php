<div class="row mb">
    <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
    <div class="row boxcontent">
        <form action="index.php?act=dangky" method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="user" placeholder="Tên đăng nhập">
            <input type="password" name="pass" placeholder="Mật khẩu">
            <input type="submit" value="Đăng ký" name="dangky">
            <input type="reset" value="Nhập lại">
        </form>
        <?php

    

    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }

        ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle"> 
        <?php include "boxright.php"; ?>
    </div>
</div>
