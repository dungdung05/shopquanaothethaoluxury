<div class="row mb mt">
            <div class="boxtrai mr">
                <div class="row mb">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo '<div class="textred">'.$thongbao.'</div>';
                        }
                    ?>
                    <div class="boxtitle" >CẬP NHẬT TÀI KHOẢN</div>
                    <div class="row boxcontent">
                        <div class="formdangky">
                            <?php
                                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                    extract($_SESSION['user']);
                                }
                            ?>
                            <form action="index.php?act=edit_taikhoan" method="post">
                                Email:<input type="email" name="email" value="<?=$email?>">
                                Tên đăng nhập:<input type="text" name="user" value="<?=$user?>">
                                Mật khẩu:<input type="password" name="pass" value="<?=$pass?>">
                                Địa chỉ:<input type="text" name="address" value="<?=$address?>">
                                Số điện thoại:<input type="text" name="tel" value="<?=$tel?>">
                                <div class="row mb10">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <input type="submit" value="CẬP NHẬT" name="capnhat">
                                    <input type="reset" value="Nhập lại">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    
                </div>

            </div>
            <div class="boxphai">
                <?php
                    include "view/boxright.php";
                ?>
            </div>
        </div>