<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ví dụ phân trang trong PHP và MySQL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<br>
<B>Giỏ hàng<br>

<?php
    $so_luong=0;
    if(isset($_SESSION['id_them_vao_gio']))
    {
        for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
        {
            $so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
        }
    }
?>

Số sản phẩm : <?php echo $so_luong; ?>
<br>
<a href="GioHang2.PHP">Giỏ hàng</a>
</B>
</body>
</html>