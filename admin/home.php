<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siêu thị thực tuyến</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="boxcenter">
        <div class="row mb header">
            <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="/shopping.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
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
</div>
        </div>

        <div class="row mb menu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Danh mục</a></li>
                <li><a href="#">Hàng Hóa</a></li>
                <li><a href="#">Khách Hàng</a></li>
                <li><a href="#">Thống kê</a></li>
            </ul>
        </div>

        <div class="row mb">
            <div class="boxtrai mr">
                <div class="banner">
                    <img src="images/banner.jpg" alt="">
                </div>

                <div class="row">
                    <div class="boxsp mr">
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                        <img src="images/1.jpg" alt="">
                    </div>
                    <div class="boxsp mr">
                        <p>$50</p>
                        <a href="#">Đồng hồ</a>
                        <img src="images/2.jpg" alt="">
                    </div>
                    <div class="boxsp">
                        <p>$70</p>
                        <a href="#">Đồng hồ</a>
                        <img src="images/3.jpg" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="boxsp mr">
                        <p>$90</p>
                        <a href="#">Đồng hồ</a>
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="boxsp mr">
                        <p>$120</p>
                        <a href="#">Đồng hồ</a>
                        <img src="images/5.jpg" alt="">
                    </div>
                    <div class="boxsp">
                        <p>$150</p>
                        <a href="#">Đồng hồ</a>
                        <img src="images/6.jpg" alt="">
                    </div>
                </div>

                <div class="boxphai">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="post">
                            <div class="row mb10">
                                Tên đăng nhập<br>
                                <input type="text" name="user" id="">
                            </div>
                            <div class="row mb10">
                                Mật khẩu<br>
                                <input type="password" name="pass" id="">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox"> Ghi nhớ tài khoản?
                            </div>
                            <li>
                                <a href="index.php?act=dangky">Đăng kí</a>
                            </li>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>

                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <div class="row mb10 top10">
                            <img src="images/1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/2.jpg" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/3.jpg" alt="">
                            <a href="#">Thuringer Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/4.jpg" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/5.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/1.jpg" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/2.jpg" alt="">
                            <a href="#">Thuringer Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/3.jpg" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb footer">
            Copyright © 2021
        </div>
    </div>
</body>
</html>
