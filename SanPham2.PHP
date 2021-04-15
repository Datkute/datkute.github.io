<!DOCTYPE html>
<html>
    <head>
        <title>Ví dụ phân trang trong PHP và MySQL</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<table align="center" width="1000" border="1">
<tr>
	<td valign="top">
<?php 
	//=====================================================================
	//--------------------------- PHẦN XỬ LÝ PHP  -------------------------
	//----------------------- BƯỚC 1: KẾT NỐI CSDL ------------------------
	//-------------------------Goi Tap Tin KNCSDL -------------------------
	include("Cnn-db.php");
	
	//=====================================================================
	//----------------------- BƯỚC 2: TÌM TỔNG SỐ RECORDS -----------------
	$sql1 = "SELECT COUNT(*) AS SMT FROM SAN_PHAM";
	$result = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_assoc($result);
	//--------------------------------Tổng Số MT --------------------------
	$total_records = $row1['SMT'];
	echo '<br> SMT:  ' .$total_records;
				
	//===================================================================== 		
	//(btdk) ? gttv khi dung : gttv khi sai
	// BƯỚC 3: TÌM limit_page VÀ CURRENT_PAGE
	$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	$limit_page = 6;
 
	//=====================================================================
	//---------------------- BƯỚC 4: XÁC ĐỊNH -----------------------------
	//------------------------Xác Định Tổng Số Trang ----------------------
	$total_page = ceil($total_records / $limit_page);
 
	//-------- Giới hạn current_page trong khoảng 1 đến total_page --------
	if ($current_page > $total_page)
	{
		$current_page = $total_page;
	}
	else if ($current_page < 1)
	{
		$current_page = 1;
	}
 
	//-------- Xác Định Vị Trí MT Bắt Đầu Của Trang (start)----------------
	$start = ($current_page - 1) * $limit_page;
 
	//=====================================================================
	//==== BƯỚC 5: THỰC THI CÂU TRUY VẤN TRUY XUẤT DL TRANG HIỆN HÀNH======
	//CP : SELECT * FROM TABLE_NAME LIMIT $ViTriBatDau, $SoMT";
	$sql2 = "SELECT * FROM SAN_PHAM LIMIT $start, $limit_page";
	$result = mysqli_query($conn, $sql2);

	//=====================================================================			
	// -------------------- PHẦN HIỂN THỊ DỮ LIỆU -------------------------
	//----------- BƯỚC 6: HIỂN THỊ DANH SÁCH LÊN 1 BẢNG -------------------
	//---------------------------------------------------------------------
	echo '<div align=center>';
	echo '<P>DANH SÁCH SẢN PHẨM</P>';
	echo '<table align="center" border="1" >';
    while($rows = mysqli_fetch_array($result))
    {
        echo "<tr>";
		$n = 3;		//Số Mẫu Tin Mỗi Dòng 
		for($i = 1; $i <= $n; $i++)	
		{
			echo "<td align='center' width='215px' valign='top' >";
            if($rows != false)
            {
				$link_hinh="images/san_pham/".$rows['hinh_anh'];
				echo "<a href='ChiTietSP2.PHP?id=".$rows['id']. "'>";
				//echo "<img src='images/san_pham/".$rows['hinh_anh']. "'  width='150px' >";
				echo "<img src='".$link_hinh. "'  width='150px' >";
				echo "</a>";
				echo "<br>";
				echo "<a href='ChiTietSP2.PHP?id=".$rows['id']. "'>";
				echo $rows['ten'];
				echo "</a>";
				echo "<br>";
				echo $rows['gia_ban'];echo "<br>";echo "<br>";
			}
			else
			{
				echo "&nbsp;";
			}
            echo "</td>";
            if($i != $n)
            {
            	$rows = mysqli_fetch_array($result);
			}
		}
        echo "</tr>";
    }		
		//---------------------------------------------------------------------
		echo "<tr>";
        echo "<td colspan='3' align='center' >";

	//=====================================================================					
    //---------------------- BƯỚC 7: HIỂN THỊ PHÂN TRANG ------------------
    //----Nếu current_page > 1 và total_page > 1 mới hiển thị nút prev-----
    if ($current_page > 1 && $total_page > 1)
	{
    	echo '<a href="SanPham2.php?page='.($current_page-1).'">Prev</a>  |  ';
	}
 
    //---------------------- Lặp khoảng giữa ------------------------------
    for ($i = 1; $i <= $total_page; $i++)
	{
	//-------------- Nếu là trang hiện tại thì hiển thị thẻ span ----------
		if ($i == $current_page)
		{
        	echo '<span>'.$i.'</span> | ';
		}
        else
	//-------------- Ngược Lại Hiển Thị Liên Kết --------------------------
		{
        	echo '<a href="SanPham2.php?page='.$i.'">'.$i.'</a>  |  ';
		}
	}
 	//---Nếu TrangHT < Tổng Số Trang Và Tổng Số Trang > 1 Thì Hiển Thị Nút Next--

    if ($current_page < $total_page && $total_page > 1)
	{
    	echo '<a href="SanPham2.php?page='.($current_page+1).'">Next</a>  |  ';
	}
    	echo "</td>";
    echo "</tr>";
    echo "</table>";	
	echo "</div>";
				
?>
	</td>
    <td valign="top"> 
<?PHP
	//-------------- Vung Gio Hang --------------------------------------
	include("VungGioHang2.php");
?>
    </td>
    </tr>
</body>
</html>