<!DOCTYPE html>
<html lang="en">
    <?PHP 
        include('Cnn-db.php');
        require_once('dbhelper.php');
        ?>
    <?php 
        session_start();
        ?>
    <?php
        $sql = "SELECT * FROM ShopDT";
        $result = mysqli_query($conn, $sql);	
        //$num = mysqli_num_rows($result);
        ?>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="/images/logo-web.png" type="image/x-icon"/>
        <!-- Carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- Custom StyleSheet -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        
        <!-- <link rel="stylesheet" href="grid.css"> -->
        
        <title>Phone Shop</title>
        <style>
            a:link {
                color: #000000;
                text-decoration: none;
            }
            a:visited {
                color: #006600;
                text-decoration: none;
            }
            a:hover {
                color: #FFCC00;
                text-decoration: underline;
            }
            a:active {
                color: #FF00CC;
                text-decoration: underline;
            }
            .banner-left {
                position: fixed;
                width: 11%;
                top: 15%;
                left: 1%;
                z-index: 2001;
            }
            .banner-right {
                position: fixed;
                width: 11%;
                top: 15%;
                right: 1%;
                z-index: 2001;
            }
            .product__btn{
                width: 250px;
            }
            .product__btn1{
                width: 80px;
                height: 25px;
                margin-top: 10px;
                border-radius: 10px;
            }
            .btn-primary{
                width: 30px;
                height: 30px;
                position: relative;
            }
            .product__btn1:hover{
                width: 100px;
                height: 30px;
                margin-top: 10px;
                background-color: #00CCFF;
            }

            .row .col{
                width: 22%;
                height: 500px;
                text-align: center;
                display: inline-block;
                margin-left: 2%;
            }
            .row1 .col1{
                width: 30%;
                height: 600px;
                text-align: center;
                display: inline-block;
            }
            .nav__list{
                width: 150%;
            }
            .img-news{
                height: 248px;
            }
            .phantrang{
                text-align: center;
                font-size: 20px;
                color: blue;
            }
            .navbar-search{
                width: 200px;
                display: inline-block;
            }
            
            .form-control{
                width: 155px;
                height: 32px;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <!-------Banner------->
        <!-- <div class="banner">
            <div class="banner-left">
                <img src="images/standee1.png" alt="Banner">
            </div>
            <div class="banner-right">
                <img src="images/standee1 - Copy.png" alt="Banner">
            </div>
            </div> -->
        <!-- Header -->
        <header id="header" class="header">
            <div class="navigation">
                <div class="container">
                    <nav class="nav">
                        <div class="nav__hamburger">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-menu"></use>
                            </svg>
                        </div>
                        <div class="nav__logo">
                            <a href="index.php" class="scroll-link">
                            PHONESHOP
                            </a>
                        </div>
                        <div class="nav__menu">
                            <div class="menu__top">
                                <span class="nav__category">PHONE</span>
                                <a href="#" class="close__toggle">
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-cross"></use>
                                    </svg>
                                </a>
                            </div>
                            <ul class="nav__list">
                                <li class="nav__item">
                                <form class=" d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="kq_timkiem.php">
                                    <div class="input-group">
                                    <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    
                                        <button class="btn btn-primary" type="submit" name="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    
                                    </div>
                                </form>
                                </li>
                                <li class="nav__item">
                                    <a href="#header" class="nav__link scroll-link">Home</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#category" class="nav__link scroll-link">category</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#news" class="nav__link scroll-link">Blog</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#contact" class="nav__link scroll-link">Contact</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="nav__icons">
                            <a href="login.php" class="icon__item">
                                <svg class="icon__user">
                                    <use xlink:href="./images/sprite.svg#icon-user"></use>
                                </svg>
                            </a>
                            <a href="cart.php" class="icon__item">
                                <svg class="icon__cart">
                                    <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
                                </svg>
                                <span id="cart__total">
                                0
                                </span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Hero -->
            <!-- <div class="hero">
                <div class="glide" id="glide_1">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <div class="hero__center">
                                    <div class="hero__left">
                                        <span class="">Cảm hứng mới cho năm 2021</span>
                                        <h1 class="">ĐIỆN THOẠI THIẾT KẾ CHO BẠN</h1>
                                        <p>XU HƯỚNG TỪ BỘ SƯU TẬP: "Phong cách điện thoại và tai nghe"</p>
                                        <a href="product.php"><button class="hero__btn">MUA NGAY</button></a>
                                    </div>
                                    <div class="hero__right">
                                        <div class="hero__img-container">
                                            <img class="banner_01" src="./images/banner_01.png" alt="banner2" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="hero__center">
                                    <div class="hero__left">
                                        <span class="">Cảm hứng mới cho năm 2021</span>
                                        <h1 class="">ĐIỆN THOẠI THIẾT KẾ CHO BẠN</h1>
                                        <p>XU HƯỚNG TỪ BỘ SƯU TẬP: "Phong cách điện thoại và tai nghe"</p>
                                        <a href="product.php"><button class="hero__btn">MUA NGAY</button></a>
                                    </div>
                                    <div class="hero__right">
                                        <img class="banner_02" src="./images/banner_02.png" alt="banner2" />
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                        <button class="glide__bullet" data-glide-dir="=0"></button>
                        <button class="glide__bullet" data-glide-dir="=1"></button>
                    </div>
                
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-arrow-left2"></use>
                </svg>
                </button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-arrow-right2"></use>
                </svg>
                </button>
                    </div>
                </div>
                </div> -->
        </header>
                    <!--New Section  -->
                <section class="section news" id="news">
                <div class="container">
                    <div class="title__container">
                        <div class="section__titles">
                            <div class="section__title active">
                            <span class="dot"></span>
                            <h1 class="primary__title">ALL News</h1>
                            </div>
                        </div>
                    </div>
                    <div class="news__container">
                        <div class="glide" id="glide_5">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <?php
                                        $sql = 'SELECT * FROM tin_tuc';
                                        $tintuc = executeResult($sql);
                                        foreach($tintuc as $tt){
                                            echo'
                                                <li class="glide__slide">
                                                    <div class="new__card">
                                                        <div class="card__header">
                                                            <img class="img-news" src="'.$tt['hinh_anh'].'" alt="">
                                                        </div>
                                                        <div class="card__footer">
                                                            <h3>'.$tt['noi_dung'].'</h3>
                                                            <span>By Admin</span>
                                                            </br><a href="news.php?ma='.$tt['id'].'"><button>Xem Thêm</button></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            ';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                </section> 
                <!--News Section-->

        <!-- End Header -->
        <!-- Main -->
    <!-- NewsLetter -->
            <section class="section newsletter" id="contact">
                <div class="container">
                    <div class="newsletter__content">
                        <div class="newsletter__data">
                            <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                            <p>A short sentence describing what someone will receive by subscribing</p>
                        </div>
                        <form action="#">
                            <input type="email" placeholder="Enter your email address" class="newsletter__email">
                            <a class="newsletter__link" href="#">subscribe</a>
                        </form>
                    </div>
                </div>
            </section>
            <!-- NewsLetter -->
        </main>
        <!-- End Main -->
        <!-- Footer -->
        <footer id="footer" class="section footer">
            <div class="container">
                <div class="footer__top">
                    <div class="footer-top__box">
                        <h3>EXTRAS</h3>
                        <a href="#">Brands</a>
                        <a href="#">Gift Certificates</a>
                        <a href="#">Affiliate</a>
                        <a href="#">Specials</a>
                        <a href="#">Site Map</a>
                    </div>
                    <div class="footer-top__box">
                        <h3>INFORMATION</h3>
                        <a href="#">About Us</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Site Map</a>
                    </div>
                    <div class="footer-top__box">
                        <h3>MY ACCOUNT</h3>
                        <a href="#">My Account</a>
                        <a href="#">Order History</a>
                        <a href="#">Wish List</a>
                        <a href="#">Newsletter</a>
                        <a href="#">Returns</a>
                    </div>
                    <div class="footer-top__box">
                        <h3>CONTACT US</h3>
                        <div>
                            <span>
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-location"></use>
                                </svg>
                            </span>
                            Số 15, Đường Trần Văn Trà. Khu Đô thị Phú Mỹ Hưng, Phường Tân Phú Quân 7 - HCM city.
                        </div>
                        <div>
                            <span>
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-envelop"></use>
                                </svg>
                            </span>
                            Lequocdat01tk@gmail.com
                        </div>
                        <div>
                            <span>
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-phone"></use>
                                </svg>
                            </span>
                            0916807724
                        </div>
                        <div>
                            <span>
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-paperplane"></use>
                                </svg>
                            </span>
                            CTIM
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer-bottom__box">
                </div>
                <div class="footer-bottom__box">
                </div>
            </div>
            </div>
        </footer>
        <!-- End Footer -->
        <!-- PopUp -->
        <!-- <div class="popup hide__popup">
            <div class="popup__content">
                <div class="popup__close">
                    <svg>
              <use xlink:href="./images/sprite.svg#icon-cross"></use>
            </svg>
                </div>
                <div class="popup__left">
                    <div class="popup-img__container">
                        <img class="popup__img" src="./images/popup.jpg" alt="popup">
                    </div>
                </div>
                <div class="popup__right">
                    <div class="right__content">
                        <h1>Nhận mã giảm<span> 30%</span> giá</h1>
                        <p>Đăng ký nhận bản tin của chúng tôi và tiết kiệm 30% cho lần mua hàng tiếp theo. Không có thư rác, chúng tôi hứa!
                        </p>
                        <form action="#">
                            <input type="email" placeholder="Enter your email..." class="popup__form">
                            <a href="#">Đăng Ký</a>
                        </form>
                    </div>
                </div>
            </div>
            </div> -->
        <!-- PopUp -->
        <!-- Go To -->
        <a href="#header" class="goto-top scroll-link">
            <svg>
                <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
            </svg>
        </a>
        <!-- Glide Carousel Script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
        <!-- Animate On Scroll -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- Custom JavaScript -->
        <!-- <script src="./js/products.js"></script> -->
        <script src="./js/index.js"></script>
        <script src="./js/slider.js"></script>
        
    </body>
</html>