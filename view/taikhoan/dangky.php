<div class="row mb mt">
            <div class="boxtrai mr">
                <div class="row mb">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo '<div class="textred">'.$thongbao.'</div>';
                        }
                        
                    ?>
                    <div class="boxtitle" >ĐĂNG KÍ THÀNH VIÊN</div>
                    <div class="row boxcontent">
                        <div class="formdangky">

                            <form action="index.php?act=dangky" method="post">
                                Email:<input type="email" name="email">
                                Tên đăng nhập:<input type="text" name="user">
                                Mật khẩu:<input type="password" name="pass">
                                Địa chỉ:<input type="text" name="address">
                                Số điện thoại:<input type="text" name="tel">
                                <div class="row mb10">
                                    <input type="submit" value="Đăng ký" name="dangky">
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