<div class="row mb mt">
            <div class="boxtrai mr">
                <div class="row mb">
                    <div class="boxtitle" >DANH MỤC: <strong><?=$tendm?></strong></div>
                    <div class="row">
                        <div class="abc">
                        <?php
                            $i=0;
                            foreach($dssp as $sp){
                                extract($sp);
                                $price = number_format($price, 2, ',', '.') . ' VND';
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $hinh=$img_path.$img;
                                if(($i==2)||($i==5)||($i==8)||($i=11)){
                                    $mr="mr";
                                }else{
                                    $mr="";
                                }
                                echo    '<div class="boxsp '.$mr.'">
                                        <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="img""></a></div>
                                        <p>'.$price.'</p>
                                        <a href="'.$linksp.'">'.$name.'</a>
                                        </div>';
                                $i++;
                            }
                        ?>
                        </div>
                    </div>
                </div>

               
            </div>
            <div class="boxphai">
                <?php
                    include "boxright.php";
                ?>
            </div>
        </div>