<div class="row mb mt">
            <div class="boxtrai mr">
                <div class="row mb">
                    <?php
                        extract($onesp);
                    ?>
                    <div class="boxtitle" >TÊN SẢN PHẨM: <?=$name?></div>
                    <div class="row boxcontent">
                        <?php
                            $img=$img_path.$img;
                            $price = number_format($price, 0, ',', '.') . ' VND';
                            echo '<div class="row mb mid "><img class="advanced-shadow" src="'.$img.'" ></div>';
                            echo    '<ul>
                                        <li>Mã sản phẩm: '.$id.'</li>
                                        <li>Tên sản phẩm: '.$name.'</li>
                                        <li>Giá tiền: '.$price.'</li>
                                    </ul>';
                            echo '<h3>Mô tả sản phẩm</h3>
                                <p class="mt20">'.$mota.'</p>';
                        ?>
                    </div>
                </div>

                <div class="row mb">
                    <div class="boxtitle">BÌNH LUẬN</div>
                    <div class="row boxcontent">
                    
                    </div>
                </div>

                <div class="row mb">
                    <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
                    <div class="row boxcontent">
                        <?php
                            foreach($sp_cung_loai as $sp_cungloai){
                                extract($sp_cungloai);
                                $linksp="index.php?act=sanphamct&&idsp=".$id;
                                echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <?php
                    include "boxright.php";
                ?>
            </div>
        </div>