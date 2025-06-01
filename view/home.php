<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner mb">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 4</div>
                        <img src="view/images/banner1/banner1.jpg" style="width:100%">
                        <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">2 / 4</div>
                        <img src="view/images/banner1/banner2.jpg" style="width:100%">
                        <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">3 / 4</div>
                        <img src="view/images/banner1/banner3.jpg" style="width:100%">
                        <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">4 / 4</div>
                        <img src="view/images/banner1/banner4.jpg" style="width:100%">
                        <div class="text"></div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $i=0;
                        foreach($spnew as $sp){
                            extract($sp);
                            $price = number_format($price, 2, ',', '.') . ' VND';
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="mr";
                            }else{
                                $mr="";
                            }
                            echo    '<div class="boxsp '.$mr.'">
                                    <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="img" ></a></div>
                                    <p>'.$price.'</p>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                    </div>';
                            $i++;
                        }
                    ?>
                    <!-- <div class="boxsp mr">
                        <div class="row img"><img src="view/images/products/1001.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/products/1001.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"><img src="view/images/products/1001.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/products/1001.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/products/1001.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"><img src="view/images/products/1001.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/products/1001.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/products/1001.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"><img src="view/images/products/1001.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div> -->
                </div>
            </div>
            <div class="boxphai">
                <?php
                    include "boxright.php";
                ?>
            </div>
        </div>