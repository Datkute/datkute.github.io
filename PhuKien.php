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
                                <form class=" d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="kq_timkiem.php">
                                    <div class="input-group">
                                    <div class="box">
                                            <div class="container-1">
                                                <button type="submit" name="submit" class="icon" type="submit"><i class="fa fa-search"></i></button>
                                                <input type="search" name="search" id="search" placeholder="Search for..." />
                                            </div>
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
        <!-- End Header -->
        <!-- Main -->
        <main id="main">
            <div class="container">
                <!-- Collection -->
                <section id="collection" class="section collection">
                    <div class="collection__container" data-aos="fade-up" data-aos-duration="1200">
                        <?php
                            $_SESSION['trang_chi_tiet_gio_hang'] = "co";	//Xác Định Đã Truy Cập Vào Trang Này
                            $sql1 = 'SELECT * FROM PRODUCT where id = 6';
                            $products = executeResult($sql1);
                            foreach ($products as $pd1)
                                echo '
                                <div class="collection__box">
                                    <div class="img__container">
                                        <a href="product.php?ma='.$pd1['id'].'">
                                            <img class="collection_02" src="'.$pd1['HINHANH'].'" alt="Product">
                                        </a>
                                    </div>
                                    <div class="collection__content">
                                        <div class="collection__data">
                                            <span style="font-size: 20px">Màu sắc mới:</span>
                                            <h1>'.$pd1['TENSP'].'</h1>
                                            <form method="GET" action="cart.php" class="form-cost">
                                                <input type="hidden" name="id" value="'.$pd1['id'].'">
                                                <input type="hidden" name="so_luong" value="1">
                                                <input type="Submit" value="Mua Ngay" class="product__btn1">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                ';?>
                        <?php
                            $_SESSION['trang_chi_tiet_gio_hang'] = "co";	//Xác Định Đã Truy Cập Vào Trang Này
                            $sql2 = 'SELECT * FROM PRODUCT where id = 3';
                            $products = executeResult($sql2);
                            foreach ($products as $pd2)
                            echo '
                            <div class="collection__box">
                            <div class="img__container">
                                <img class="collection_01" src="'.$pd2['HINHANH'].'" alt="product">
                            </div>
                            <div class="collection__content">
                                <div class="collection__data">
                                    <span style="font-size: 20px">
                                        Bản tin điện thoại:
                                    </span>
                                    <h1>'.$pd2['TENSP'].'</h1>
                                                    <form method="GET" action="cart.php" class="form-cost">
                                                        <input type="hidden" name="id" value="'.$pd2['id'].'">
                                                        <input type="hidden" name="so_luong" value="1">
                                                        <input type="Submit" value="Mua Ngay" class="product__btn1">
                                                    </form>
                                </div>
                            </div>
                            </div>
                            ';?>
                </section>
                <!----------------------------------------->
                <!----------------------------------------->
                <!-- Latest Products -->
                <section class="section latest__products" id="latest">
                <div class="title__container">
                <div class="section__title active" data-id="Latest Products">
                <span class="dot"></span>
                <h1 class="primary__title"><a href="index.php"> CÁC SẢN PHẨM MỚI NHẤT</a></h1>
                <h1 class="primary__title">
                    &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                </h1>
                <h1 class="primary__title"><a href="PhuKien.php">PHỤ KIỆN ĐIỆN THOẠI</a></h1>
                </div>
                </div>
                <div class="container" data-aos="fade-up" data-aos-duration="1200">
                <div class="glide" id="glide_2">
                <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides latest-center">
                <?php
                    $_SESSION['trang_chi_tiet_gio_hang'] = "co";	//Xác Định Đã Truy Cập Vào Trang Này
                    $sql = "SELECT * FROM product where MASP like 'PK%'";
                    
                    $products_pk = executeResult($sql);
                    foreach ($products_pk as $pk){
                        echo '<li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">   <!--Hình Ảnh-->
                                        <tr>
                                            <td>
                                                <a href="product_pk.php?ma='.$pk['id'].'">
                                                    <img src="'.$pk['HINHANH'].'" alt="product">
                                                </a>
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="product__footer">
                                        <h3>
                                            <a href="product.php?ma='.$pk['id'].'">
                                                '.$pk['TENSP'].' <!--Tên SP-->
                                            </a>
                                        </h3>
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
                                        <div class="product__price">                                                           
                                            <h4>
                                                
                                             '.number_format($pk['DONGIA'],0, ',', '.').' VNĐ   
                                            </h4>
                                        </div>
                                        <div class="product-details__btn">
                                            <form method="GET" action="cart.php" class="form-cost">
                                                <input type="hidden" name="id" value="'.$pk['id'].'">
                                                <input type="hidden" name="so_luong" value="1">
                                                <button type="Submit" class="product__btn">
                                                    Thêm Vào Giỏ Hàng
                                                    <i class="fas fa-shopping-cart"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-eye"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-heart-o"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-loop2"></use>
                                            </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>';}              
                ?>
                </ul>
                </div>
                </div>
                </div>               
                </section>
                <!-------Session--------->
                <section class="category__section section" id="category">
                    <div class="tab__list">
                        <div class="title__container tabs">
                            <div class="section__titles category__titles ">
                                <div class="section__title filter-btn active" data-id="All Products">
                                    <span class="dot"></span>
                                    <h1 class="primary__title">Tất Cả Sản Phẩm</h1>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                <div class="container" data-aos="fade-up" data-aos-duration="1200">
                <div class="glide" id="glide_2">
                <div class="glide__track" data-glide-el="track">
                <!-------------------------------php Tất cả sản phẩm--------------------------------------->
                <div class="container">
                <div class="row">
  
                <?php
					$sql = 'SELECT COUNT(id) AS number FROM product';//Điếm số ID của bảng student
					$studentList = executeResult($sql);//Gọi hàm kết nối CSDL và thực thi gán mảng
					$number = 0;
					if ($studentList != null && count($studentList) > 0) {//Kiểm tra xem mảng này có phần tử nào hay không
							$number = $studentList[0]['number'];
						}
					$pages = ceil($number / 8);// Lấy giá trị của number chia cho 5
					$current_page = 1;
					if (isset($_GET['page'])) {// Kiểm tra page của trang có tồn tại hay không
						$current_page = $_GET['page'];
						}
					$index = ($current_page - 1) * 8;// Lần đầu tiên là trang thứ nhất là 1 Suy 1 - 1 = 0 
					$sql = 'SELECT * FROM product LIMIT '.$index.', 8';
					$studentList = executeResult($sql);
					$i = 0;
					foreach ($studentList as $pd){
						$i ++ ;
					echo'<div class="col">
                    <div><img src="'.$pd['HINHANH'].'" alt=""> </div>
                    <div class="product__footer">
                        <h3>
                            <a href="product.php?ma='.$pd['id'].'">
                                '.$pd['TENSP'].' <!--Tên SP-->
                            </a>
                        </h3>
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
                        <div class="product__price">
                            <h4> '.number_format($pd['DONGIA'],0, ',', '.').' VNĐ</h4>
                        </div>
                        <div class="product-details__btn">
                            <form method="GET" action="cart.php" class="form-cost">
                                <input type="hidden" name="id" value="'.$pd['id'].'">
                                <input type="hidden" name="so_luong" value="1">
                                <button type="Submit" class="product__btn">
                                    Thêm Vào Giỏ Hàng
                                    <i class="fas fa-shopping-cart"></i>
                                </button>                            
                            </form>
                        </div>
                        
                    </div>  
                </div>';
				}
				?>
                <div class="row set_row" align="center">
                    <ul class="pagination">
                    <?php 
                        if ($current_page > 1 && $pages > 1){
                            echo '<a href="index.php?page='.($current_page-1).'">Prev</a> | ';
                        }
                         
                        // Lặp khoảng giữa
                        for ($i = 1; $i <= $pages; $i++){
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                            if ($i == $current_page){
                                echo '<span>'.$i.'</span> | ';
                            }
                            else{
                                echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
                            }
                        }
                         
                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                        if ($current_page < $pages && $pages > 1){
                            echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
                        }
                    ?>
                    </ul>
                </div>
                

                <!--  -->
                </div>
                </div>
                <!-------------------------------php Tất cả sản phẩm--------------------------------------->
                </div>
                </div>
                </div>
                </div>
                </section>
                <!-------Session--------->
                <!-- Facility Section -->
                <section class="facility__section section" id="facility">
                    <div class="container">
                        <div class="facility__contianer" data-aos="fade-up" data-aos-duration="1200">
                            <div class="facility__box">
                                <div class="facility-img__container">
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-airplane"></use>
                                    </svg>
                                </div>
                                <p>MIỄN PHÍ VẬN CHUYỂN</p>
                            </div>
                            <div class="facility__box">
                                <div class="facility-img__container">
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-credit-card-alt"></use>
                                    </svg>
                                </div>
                                <p>100% BẢO HÀNH</p>
                            </div>
                            <div class="facility__box">
                                <div class="facility-img__container">
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
                                    </svg>
                                </div>
                                <p>TRẢ GÓP NHIỀU SẢN PHẨM</p>
                            </div>
                            <div class="facility__box">
                                <div class="facility-img__container">
                                    <svg>
                                        <use xlink:href="./images/sprite.svg#icon-headphones"></use>
                                    </svg>
                                </div>
                                <p>HỖ TRỢ TRỰC TUYẾN 24/7</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Facility Section -->
            </div>
            <!-- Testimonial Section -->
            <section class="section testimonial" id="testimonial">
                <div class="testimonial__container">
                    <div class="glide" id="glide_4">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <div class="testimonial__box">
                                        <div class="client__image">
                                            <img src="./images/profile1.jpg" alt="profile">
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore quibusdam consequatur eligendi unde officia ex quae.ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic
                                            nesciunt tempore quibusdam consequatur eligendi unde officia ex quae.
                                        </p>
                                        <div class="client__info">
                                            <h3>John Smith</h3>
                                            <span>Founder at Apple</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="testimonial__box">
                                        <div class="client__image">
                                            <img src="./images/profile2.jpg" alt="profile">
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore quibusdam consequatur eligendi unde officia ex quae.ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic
                                            nesciunt tempore quibusdam consequatur eligendi unde officia ex quae.adipisicing elit. Recusandae fuga hic nesciunt tempore quibusdam consequatur eligendi unde officia ex quae.
                                        </p>
                                        <div class="client__info">
                                            <h3>John Smith</h3>
                                            <span>Founder at Apple</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="testimonial__box">
                                        <div class="client__image">
                                            <img src="./images/profile3.jpg" alt="profile">
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore quibusdam consequatur eligendi unde officia ex quae.ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic
                                            nesciunt tempore quibusdam consequatur eligendi unde officia ex quae.adipisicing elit. Recusandae fuga hic nesciunt tempore quibusdam consequatur eligendi unde officia ex quae.
                                        </p>
                                        <div class="client__info">
                                            <h3>John Smith</h3>
                                            <span>Founder at Apple</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="testimonial__box">
                                        <div class="client__image">
                                            <img src="./images/profile4.jpg" alt="">
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae fuga hic nesciunt tempore quibusdam consequatur eligendi unde officia ex quae.adipisicing elit. Recusandae fuga hic nesciunt tempore quibusdam consequatur
                                            eligendi unde officia ex quae. hic nesciunt tempore quibusdam consequatur eligendi unde officia ex quae.
                                        </p>
                                        <div class="client__info">
                                            <h3>John Smith</h3>
                                            <span>Founder at Apple</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0"></button>
                            <button class="glide__bullet" data-glide-dir="=1"></button>
                            <button class="glide__bullet" data-glide-dir="=2"></button>
                            <button class="glide__bullet" data-glide-dir="=3"></button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial Section -->
            <!--New Section  -->
            <section class="section news" id="news">
                <div class="container">
                    <div class="title__container">
                    <div class="section__titles">
                        <div class="section__title active">
                        <span class="dot"></span>
                        <h1 class="primary__title">
                            <a href="all_news.php">
                                Phone News</a>
                        </h1>
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