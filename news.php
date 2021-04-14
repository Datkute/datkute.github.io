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


    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="grid.css" />

    <title>CTIM'S TECHNOLOGY SHOP</title>
    
</head>
    <style>
        .news{
            margin-left: 25%;
            margin-right: 20%;
            width: 800px;
        }
        .noidungnews{
            font-size: 35px;
            margin-top: 3%;
            margin-bottom: 2%;
            margin-left: 3%;
            margin-right: 3%;
        }
        .tintuc{
            letter-spacing: 1px;
            line-height: 30px;
        }
    </style>
<body>
    <!--Main-->
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
                        <a href="/" class="scroll-link">
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

                        <a href="#" class="icon__item">
                            <svg class="icon__search">
                <use xlink:href="./images/sprite.svg#icon-search"></use>
              </svg>
                        </a>

                        <a href="cart.php" class="icon__item">
                            <svg class="icon__cart">
                <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
              </svg>
                            <span id="cart__total">0</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-------------------------------------------------------------->
    <section>
        <div class="row">
            <div class="news">
                
                <?php
                    $ma = $_GET['ma'];
                    $sql = 'SELECT * FROM tin_tuc  where id = "'.$ma.'"';
                    $news = executeResult($sql);
                    foreach ($news as $ns){
                        echo'
                            <div>
                                <p class="noidungnews"><b>
                                    '.$ns['noi_dung'].'
                                </b></p>
                            </div>
                            <div>
                                <p>
                                    '.$ns['chitiet_noidung'].'
                                </p>
                            </div>
                        ';
                    }
                    ?> 
            </div>  
        </div>
    </section>
    
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
            </span> Số 15, Đường Trần Văn Trà. Khu Đô thị Phú Mỹ Hưng, Phường Tân Phú Quân 7 - HCM city.
                    </div>
                    <div>
                        <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-envelop"></use>
              </svg>
            </span> Lequocdat01tk@gmail.com
                    </div>
                    <div>
                        <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-phone"></use>
              </svg>
            </span> 0916807724
                    </div>
                    <div>
                        <span>
              <svg>
                <use xlink:href="./images/sprite.svg#icon-paperplane"></use>
              </svg>
            </span> CTIM
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