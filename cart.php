<?php 
   include('Cnn-db.php');
   require_once('dbhelper.php');
   session_start();
   ob_start();
   $id_ss = session_id();
?> 
<?php
    $sql_sl = "SELECT SUM(id) AS so FROM product WHERE id = '$id_ss'";
    $query_soluong = mysqli_query($conn,$sql_sl);
    $soluong = mysqli_fetch_array($query_soluong);
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="js/jquery-1.11.1.min.js"></script>
      <title>Phone Shop</title>
      <style type="text/css">
         @media screen and (max-width: 600px) { 
         table#cart tbody td .form-control { 
         width:20%; 
         display: inline !important;
         } 
         .actions .btn { 
         width:36%; 
         margin:1.5em 0;
         } 
         .actions .btn-info { 
         float:left;
         } 
         .actions .btn-danger { 
         float:right;
         } 
         table#cart thead {
         display: none;
         } 
         table#cart tbody td {
         display: block;
         padding: .6rem;
         min-width:320px;
         } 
         table#cart tbody tr td:first-child {
         background: #333;
         color: #fff;
         } 
         table#cart tbody td:before { 
         content: attr(data-th);
         font-weight: bold; 
         display: inline-block;
         width: 8rem;
         } 
         table#cart tfoot td {
         display:block;
         } 
        
         table#cart tfoot td .btn {
         display:block;
         }
        .allcontent{
            justify-content: center;
         }
         
         .name_product{
             font-size: 20px;
         }
         /**************************************** 
                  MINUS AND PLUS
         */
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
                           <form method="GET" action="kq_timkiem.php" class="form-cost">
                                       <div class="box">
                                            <div class="container-1">
                                                <button type="submit" name="submit" class="icon" type="submit"><i class="fa fa-search"></i></button>
                                                <input type="search" name="search" id="search" placeholder="Search for..." />
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
                     <a href="login.html" class="icon__item">
                        <svg class="icon__user">
                           <use xlink:href="./images/sprite.svg#icon-user"></use>
                        </svg>
                     </a>
                     <a href="cart.php" class="icon__item">
                        <svg class="icon__cart">
                           <use xlink:href="./images/sprite.svg#icon-shopping-basket"></use>
                        </svg>
                        <span id="cart__total">
                            <?php
                                if(!$soluong['so']){
                                    echo 0;
                                }else{
                                    echo $soluong['so'];
                                }
                            ?>
                        </span>
                     </a>
                  </div>
               </nav>
            </div>
         </div>
         <div class="page__title-area">
            <div class="container">
               <div class="page__title-container">
                  <ul class="page__titles">
                     <li>
                        <a href="index.php">
                           <svg>
                              <use xlink:href="./images/sprite.svg#icon-home"></use>
                           </svg>
                        </a>
                     </li>
                     <li class="page__title">GIỎ HÀNG</li>
                  </ul>
               </div>
            </div>
         </div>
      </header>
      <section class="section-cart">
         <?php
            //-------------------------Goi Tap Tin KNCSDL -------------------------
            include("Cnn-db.php");
            
            //---------------------------------------------------------------------
            //echo '<br>ID :  ' .$_GET['id'];
            if((isset($_GET['id'])) && ($_SESSION['trang_chi_tiet_gio_hang'] == 'co'))
               //Nếu ID Tồn Tại Và Trang ChiTietSP2.PHP Đã Truy Cập
               {
            	$_SESSION['trang_chi_tiet_gio_hang']="huy_bo";
            
            	//$_SESSION['id_them_vao_gio']  : Mảng Lưu ID S.Phẩm
            	//$_SESSION['sl_them_vao_gio']	: Mảng Lưu SoLg S.Phẩm GIỎ Hàng Theo Từng ID
            			
            	if(isset($_SESSION['id_them_vao_gio']))		
            	//$_SESSION['id_them_vao_gio'] :  Đã Tồn Tại
                   {
                       $so = count($_SESSION['id_them_vao_gio']);
                       $trung_lap = "khong";
                       for($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++)
                       {
                           if($_SESSION['id_them_vao_gio'][$i] == $_GET['id'])
                           {
                               $trung_lap = "co";
                               $vi_tri_trung_lap = $i;
                               break;
                           }
                       }
                       if($trung_lap == "khong")
                       {
                           $_SESSION['id_them_vao_gio'][$so] = $_GET['id'];
                           $_SESSION['sl_them_vao_gio'][$so] = $_GET['so_luong'];
                       }
                       if($trung_lap == "co")
                       {
                           $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] = $_SESSION['sl _them_vao_gio'][$vi_tri_trung_lap] + $_GET['so_luong'];
            			//Cap Nhat Lại So Lg
                       }
                   }
                   else	//$_SESSION['id_them_vao_gio'] :  Chưa Tồn Tại
                   {
                       $_SESSION['id_them_vao_gio'][0] = $_GET['id'];
                       $_SESSION['sl_them_vao_gio'][0] = $_GET['so_luong'];
                   }
               }
            //============================================================
            echo "<p align='center'>";
            $gio_hang = "khong";
            if(isset($_SESSION['id_them_vao_gio']))
            {
               	$so_luong=0;
               	for($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++)
               	{
                   	$so_luong = $so_luong + $_SESSION['sl_them_vao_gio'][$i];
               	}
               	if($so_luong != 0)
               	{
                   	$gio_hang = "co";
               	}
            }
            
           		
            
            if($gio_hang == "khong")
            {
               	echo "<font class='font' color='#FF0000' size='+2' align='center'> <b align='center'> Không có sản phẩm trong giỏ hàng</b></font>";
            }
            else
            {
            	//---------------------------Bo Sung -------------------------------
                
            	echo"<div class='allcontent'>";
                echo "<form method='post' action='CapNhat_GioHang2.PHP' class='form-product' style='width: 1140px; margin-left: 12%'>";
                   //echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
            	//------------------------------------------------------------------
            	echo "<table class='table-product table table-hover table-condensed' style='width: 1140px; border=0 cellpadding='0' cellspacing='0'  id='cart'>";
                           echo"
                             <thead> 
                              <tr style='font-size: 20px'> 
                               <th style='width:37%'>Tên sản phẩm</th> 
                               <th style='width:15%''>Giá</th> 
                               <th style='width:16%'>Số lượng</th> 
                               <th style='width:22%' class='text-center'>Thành tiền</th> 
                               <th style='width:10%'> </th> 
                              </tr> 
                             </thead>  
                           ";
                   $tong_cong = 0;
                   for($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++)
                   {
            		$sql = "SELECT * FROM product WHERE id = '".$_SESSION['id_them_vao_gio'][$i]."'";
                       $result = mysqli_query($conn, $sql);
                       $rows = mysqli_fetch_array($result);
            		
                       $tien = $rows['DONGIA'] * $_SESSION['sl_them_vao_gio'][$i];
                       $tong_cong = $tong_cong + $tien;
            		
            		$_SESSION['tong_tien'] = $tong_cong;	//Luu Tong So Tien
            		//---------------------------Bo Sung -------------------------------
            		$name_id="id_".$i;
            		$name_sl="sl_".$i;
            		//------------------------------------------------------------------		
                        
                       if($_SESSION['sl_them_vao_gio'][$i] != 0)
                       {
                       echo"<tr>                       
                               <td  style='display: inline-block'>          
                                   <img src=".$rows['HINHANH']." alt='Sản phẩm 1' class='img-responsive' width='100' style='display: inline-block'>                              
                                   <div style='display: inline-block'>
                                       <span class='name_product'><strong style='font-size: 18px; color: #40394a'>".$rows['TENSP']."</strong></span>
                                       <br>                   
                                       <span>".$rows['MOTA']."</span>      
                                   </div>                                      
                               </td>                               
                               <td data-th='Price''>
                               ".number_format($rows['DONGIA'])."  VNĐ
                                </td>
                               <td data-th='Quantity'>
                                   <div class='buttons_added'> 
                                       <input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' > 
                                       <input class='minus is-form' style='width: 30px; background-color: #FF9966; border=0' type='hidden' value='-' min ='1' id='inc' onclick='decNumber()'>
                                       <input for='inc' id='display' type='number' max='10' style='width: 50px; text-align:center' min ='0' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."'></input>
                                       <input class='plus is-form' style='width: 30px; background-color: #FF9966;border=0' type='hidden' value='+' id='dec' onclick='incNumber()'>
                                   </div>
                               </td>
                               <td data-th='Subtotal' class='text-center'>".number_format($tien)." đ</td>    
                               <td>
                                 
                                    <button class='btn btn-info btn-sm' name='btn-trash'>
                                       <i class='fa fa-trash'></i>
                                    </button>
                               </td>                                      
                           </tr>";
                       }
                   }	//Kết Thúc For  
                  
               echo "</table>";
               echo"
                    <p class='text-center' style='color: red; font-size: 15px; margin-left: 80% '><strong>Tổng: ".number_format($tong_cong)." VNĐ</strong></p> 
                    <div class='btn-primary-main'><button type='submit' class='btn btn-primary'>Cập nhật</button></div>

                    ";
            echo "</form>";
            
            echo"</div>";
               
            }
            echo "
                    <a href='index.php' style='margin-right: 56%; margin-top: 15px; margin-bottom: 15px; margin-left: 12%' class='btn btn-warning'><i class='fa fa-angle-left'></i> Tiếp tục mua hàng</a>
                    <a href='HuyGioHang2.php' style='margin-top: 15px; margin-bottom: 15px;margin-right: 12%' class='btn btn-warning'> Hủy Giỏ Hàng &nbsp;<i class='far fa-minus-square'></i></a>
                ";
            
            
            //-------------- Chèn Trang Thông Tin Người Mua Hàng ----------------
            include("ThongTin_KH2.php");
            echo "</p>";
            //-------------- Vung Gio Hang --------------------------------------
            /*echo "<p align='center'>";
            include("VungGioHang2.php");
            echo "</p>";
            */
               ?>
      </section>
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
         </footer>
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
       <!----------------------->
      <script type="text/javascript">
         var i = 0;
         function incNumber() {
            if (i < 10) {
                  i++;
            } else if (i = 10) {
                  i = 0;
            }
            document.getElementById("display").innerHTML = i;
         }
         function decNumber() {
            if (i > 0) {
                  --i;
            } else if (i = 0) {
                  i = 10;
            }
            document.getElementById("display").innerHTML = i;
         }
      </script>     

   </body>
</html>