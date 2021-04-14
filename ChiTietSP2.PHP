<?php 
	session_start();
?>
<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	//-------------------------Goi Tap Tin KNCSDL -------------------------
	include ("conndb.php");
	//---------------------------------------------------------------------
    $_SESSION['trang_chi_tiet_gio_hang'] = "co";	//Xác Định Đã Truy Cập Vào Trang Này
	
	$id=$_GET['id'];	//Truy Xuat ID Cua San Pham Duoc Chon
	
	$sql = "SELECT * FROM SAN_PHAM WHERE ID = '".$id."'";
	//Hoac :  $sql = "SELECT * FROM SAN_PHAM WHERE ID = '$id'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_array($result);
    $link_hinh = "images/san_pham/".$rows['hinh_anh'];
    echo "<table>";
        echo "<tr>";
            echo "<td width='250px' align='center' >";
            echo "<img src='" .$link_hinh. "' width='150px' >";
            echo "</td>";
            echo "<td valign='top' >";
            echo "<a href='#'>";	echo $rows['ten'];	 echo "</a>";
			echo "<br>";
			echo "<br>";
			echo $rows['gia_ban'];
			echo "<br>";
			echo "<br>";
			echo "<form method='get' action='GioHang2.PHP'>";
				//echo "<input type='hidden' name='thamso' value='gio_hang' > ";
				echo "<input type='hidden' name='id' value='".$_GET['id']."' > ";
				echo "<input type='text' name='so_luong' value='1' style='width:50px' > ";
				echo "<input type='submit' value='Thêm vào giỏ' style='margin-left:15px' > ";
			echo "</form>";
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td colspan='2' >";
                echo "<br>";
                echo "<br>";
                echo $rows['noi_dung'];
            echo "</td>";
        echo "</tr>";
    echo "</table>";
?>
<p align="center"><a href="SanPham2.PHP"> Tiếp Tục </a></p>
</body>
</HTML>