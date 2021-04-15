<?php 
	session_start();
?> 

<?php
  include('Cnn-db.php');
  include('dbhelper.php');
?>

<?php
	$sql = "SELECT * FROM ShopDT";
	$result = mysqli_query($conn, $sql);	
	//$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />

    <!-- Carousel -->
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css" />
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css" />

    <!-- Animate On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Phone Shop</title>
    <style>
    table{
        position: relative;
        left: 35%;
        top: 20%;
        text-align: center;
        margin-bottom: 300px;
    }
    .tb{
        text-align: center;
        padding: 20px;
        font-size: 20px;
    }
    .TIEUDE{
        background-color: aqua;
        color: blue;
    }
    .form-cost{
        margin-left: 35%;
         margin-top: 20px;
    }
    .btn-cart{
      height: 105%;
      width: 110%;
      background-color: #FFCCFF;
    }
    .btn-cart:hover{
      height: 105%;
      width: 110%;
      background-color: #66CCFF;    
    }
    .number-cart{
      margin-bottom: 15px;
      margin-left: 43%;
      text-align: center;
    }
    .btn-back{
        width: 30px;
        height: 30px;
    }
    .yeucau{
        font-size: 40px;
        text-align: center;
        color: red;
        margin-top: 20%;
        text-decoration: red;
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
    .btn-primary{
        width: 30px;
        height: 30px;
        position: relative;
    }
    /*Search */
    .container-1{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
.container-1 input#search{
  width: 200px;
  height: 50px;
  background: #CCCCFF;
  border: none;
  font-size: 10pt;
  float: left;
  color: black;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  -webkit-transition: background .55s ease;
-moz-transition: background .55s ease;
-ms-transition: background .55s ease;
-o-transition: background .55s ease;
transition: background .55s ease;
}
.container-1 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-1 input#search:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-1 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-1 input#search:-ms-input-placeholder {  
   color: #65737e;  
}
.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
  border: none;
  background-color: #CCCCFF;
}
.container-1 .icon:hover{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
  border: none;
  background-color: #FFCCFF;
}
.container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
    outline:none;
    background: #FFCCFF;
  }
    </style>
</head>

<body>
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
                            <span class="nav__category">PHONESHOP</span>
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
                                    <div class="box">
                                            <div class="container-1">
                                                <button type="submit" name="submit" class="icon" type="submit"><i class="fa fa-search"></i></button>
                                                <input type="search" name="search" id="search" placeholder="Search for..." />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li class="nav__item">
                                <a href="index.php" class="nav__link">Home</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Products</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Blog</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="nav__icons">
                        <a href="login.PHP" class="icon__item">
                            <svg class="icon__user">
                                <use xlink:href="./images/sprite.svg#icon-user"></use>
                            </svg>
                        </a>
                        <a href="cart.PHP" class="icon__item">
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

    <?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['submit'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "
                    <p class='yeucau'>
                        <b>
                            Vui lòng nhập dữ liệu chính xác vào ô trống!
                        </b>
                    </p>
                ";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "SELECT * FROM PRODUCT where TENSP like '%$search%'";
 
                // Kết nối sql
                include('Cnn-db.php');
                // Thực thi câu truy vấn
                
                $sql = mysqli_query($conn, $query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo"";
                    echo "<p class='tb'><a href='index.php'><button class='btn-back'>
                            <i class='fas fa-long-arrow-alt-left'></i>
                        </button></a>&nbsp;&nbsp;&nbsp;&nbsp; $num Kết Quả Tìm Kiếm Với Từ Khóa Tên: <b>$search</b>!</p>";
                   
                    $products = executeResult($query);
                    foreach ($products as $pd){
                     echo'
                    <div class="page__title-area">
                    <div class="container">
                        <div class="page__title-container">
                        <ul class="page__titles">
                            <li>
                            <a href="/">
                                <svg>
                                <use xlink:href="./images/sprite.svg#icon-home"></use>
                                </svg>
                            </a>
                            </li>
                            <li class="page__title">'.$pd['TENSP'].'</li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </header>

                <main id="main">
                    <div class="container">
                    <!-- Products Details -->
                    <section class="section product-details__section">
                        <div class="product-detail__container">
                        <div class="product-detail__left">
                            <div class="details__container--left">
                    
                            <div class="product__picture" id="product__picture">
                                <!-- <div class="rect" id="rect"></div> -->
                                <div class="picture__container">
                                <img src="'.$pd['HINHANH'].'" id="pic" />
                                </div>
                            </div>
                            <div class="zoom" id="zoom"></div>
                            </div>
                    <!---------------------------PHP Thêm Vào Giỏ Hàng-------------------------->
                            <div class="product-details__btn">
                                <form method="GET" action="cart.php" class="form-cost">
                                <input type="hidden" name="id" value="'.$pd['id'].'">
                                <input type="number" name="so_luong" value="1" style="width:50px" class="number-cart"></br>
                                <input type="Submit" value="Thêm Vào Giỏ Hàng" class="btn-cart">
                                </form>
                            </div>
                    <!---------------------------PHP Thêm Vào Giỏ Hàng-------------------------->
                        </div>
                        <div class="product-detail__right">
                            <div class="product-detail__content">
                            <h3>'.$pd['TENSP'].'</h3>
                            <div class="price">
                                <span class="new__price">'.$pd['DONGIA'].' VNĐ</span>
                            </div>
                            <div class="product__review">
                                <div class="rating">
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                                </svg>
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                                </svg>
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                                </svg>
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-star-full"></use>
                                </svg>
                                <svg>
                                    <use xlink:href="./images/sprite.svg#icon-star-empty"></use>
                                </svg>
                                </div>
                                <a href="#" class="rating__quatity">3 reviews</a>
                            </div>
                            <p>
                                '.$pd['chitietsp'].'
                            </p>
                            <div class="product__info-container">
                                <ul class="product__info">
                                <li class="select">
                                    <div class="select__option">
                                    <label for="colors">Color</label>
                                    <select name="colors" id="colors" class="select-box">
                                        <option value="blue">blue</option>
                                        <option value="red">red</option>
                                    </select>
                                    </div>
                                    <div class="select__option">
                                    <label for="size">Inches</label>
                                    <select name="size" id="size" class="select-box">
                                        <option value="6.65">6.65</option>
                                        <option value="7.50">7.50</option>
                                    </select>
                                    </div>
                                </li>
                                <li>

                                    <div class="input-counter">
                                    <span>Quantity:</span>
                                    <div>
                                        <span class="minus-btn">
                                        <svg>
                                            <use xlink:href="./images/sprite.svg#icon-minus"></use>
                                        </svg>
                                        </span>
                                        <input type="text" min="1" value="1" max="10" class="counter-btn">
                                        <span class="plus-btn">
                                        <svg>
                                            <use xlink:href="./images/sprite.svg#icon-plus"></use>
                                        </svg>
                                        </span>
                                    </div>
                                    </div>
                                </li>

                                <li>
                                    <span>Subtotal:</span>
                                    <a href="#" class="new__price">'.$pd['DONGIA'].'</a>
                                </li>
                                <li>
                                    <span>Brand:</span>
                                    <a href="#">'.$pd['MANXB'].'</a>
                                </li>
                                <li>
                                    <span>Product Type:</span>
                                    <a href="#">Phone</a>
                                </li>
                                <li>
                                    <span>Availability:</span>
                                    <a href="#" class="in-stock">In Stock (7 Items)</a>
                                </li>
                                </ul>
                                <div class="product-info__btn">
                                <a href="#">
                                    <span>
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-crop"></use>
                                    </svg>
                                    </span>&nbsp;
                                    SIZE GUIDE
                                </a>
                                <a href="#">
                                    <span>
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-truck"></use>
                                    </svg>
                                    </span>&nbsp;
                                    SHIPPING
                                </a>
                                <a href="#">
                                    <span>
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-envelope-o"></use>
                                    </svg>&nbsp;
                                    </span>
                                    ASK ABOUT THIS PRODUCT
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="product-detail__bottom">
                        <div class="title__container tabs">

                            <div class="section__titles category__titles ">
                            <div class="section__title detail-btn active" data-id="description">
                                <span class="dot"></span>
                                <h1 class="primary__title">Description</h1>
                            </div>
                            </div>

                            <div class="section__titles">
                            <div class="section__title detail-btn" data-id="reviews">
                                <span class="dot"></span>
                                <h1 class="primary__title">Reviews</h1>
                            </div>
                            </div>

                            <div class="section__titles">
                            <div class="section__title detail-btn" data-id="shipping">
                                <span class="dot"></span>
                                <h1 class="primary__title">Shipping Details</h1>
                            </div>
                            </div>
                        </div>
                        ';
                    }
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?> 
    <!-- Footer -->
    <!-- <footer id="footer" class="section footer">
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
                        </span> 42 Dream House, Dreammy street, 7131 Dreamville, USA
                    </div>
                    <div>
                        <span>
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-envelop"></use>
                            </svg>
                        </span> company@gmail.com
                    </div>
                    <div>
                        <span>
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-phone"></use>
                            </svg>
                        </span> 456-456-4512
                    </div>
                    <div>
                        <span>
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-paperplane"></use>
                            </svg>
                        </span> Dream City, USA
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
    </footer> -->

    <!-- End Footer -->

    <!-- Go To -->

    <a href="#header" class="goto-top scroll-link">
        <svg>
            <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
        </svg>
    </a>

    <!-- Glide Carousel Script -->
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

    <!-- Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JavaScript -->
    <script src="./js/products.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/slider.js"></script>
</body>

</html>