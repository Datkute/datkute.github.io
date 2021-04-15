<?php
	//include ("Cnn-db.php");
	//$conn= mysqli_connect("localhost","root","");
	//$db= mysqli_select_db("");
	//$sql = "select * from DANGNHAP-KH";
	//$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="../images/favicon.ico">
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="XL-login.php" method="POST" class="sign-in-form">
                    <h2 class="title">Đăng Nhập</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="txtuser"  placeholder="Nhập Email hoặc số điện thoại" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="txtpass" placeholder="Nhập mật khẩu" />
                    </div>
                    <input type="submit" value="Đăng Nhập" class="btn solid" />
                    <p class="social-text">Hoặc đăng nhập bằng các nền tảng mạng xã hội khác!</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="XL-DangKy.php" method="POST" class="sign-up-form">
                    <h2 class="title">Đăng Ký</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="txtuser" placeholder="Nhập số điện thoại " />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="txtemail" placeholder="Nhập Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="txtpass" placeholder="Nhập mật khẩu." />
                    </div>
                    <input type="submit" class="btn" value="Đăng Ký" />
                    <p class="social-text">Hoặc đăng nhập bằng các nền tảng mạng xã hội khác!</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Bạn chưa có tài khoản?</h3>
                    <p>
                        Hãy đăng ký để nhận những ưu đãi từ chúng tôi!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Đăng Ký
                    </button>

                    <a href="index.php"><button class="btn transparent" id="sign-in-btn">
                    Trang chủ
                    </button></a>
                    

                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Bạn đã có tài khoản?</h3>
                    <p>
                        Hãy Đăng Nhập để tiếp tục Shopping nhé!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Đăng Nhập
                    </button>
                    <a href="index.php"><button class="btn transparent" id="sign-in-btn">
                        Trang chủ
                    </button></a>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>