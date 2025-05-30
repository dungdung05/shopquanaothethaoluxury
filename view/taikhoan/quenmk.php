<div class="row mb mt">
            <div class="boxtrai mr">
                <div class="row mb">
                    
                    <div class="boxtitle" >QUÊN MẬT KHẨU</div>
                    <div class="row boxcontent">
                        <div class="formdangky">

                            <form action="index.php?act=quenmk" method="post">
                                Email:<input type="email" name="email">
                                
                                <div class="row mb10">
                                    <input type="submit" value="Gửi email" name="guiemail">
                                    <input type="reset" value="Nhập lại">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo '<div class="textred">'.$thongbao.'</div>';
                        }
                    ?>
                </div>

            </div>
            <div class="boxphai">
                <?php
                    include "view/boxright.php";
                ?>
            </div>
        </div>