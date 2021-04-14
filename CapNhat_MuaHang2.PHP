<?php 
	session_start();
?>

<?php
	//-------------------------Goi Tap Tin KNCSDL -------------------------
	include ("Cnn-db.php");
	//---------------------------------------------------------------------
	
    if(isset($_SESSION['id_them_vao_gio']))
    {
	//----------- Truy Xuat Thong Tin Tu FORM KHACH HANG ------------
		$ten_kh = trim($_POST['txtten_kh']);
        $email_kh = trim($_POST['txtemail_kh']);
        $dienthoai_kh = trim($_POST['txtdienthoai_kh']);
        $diachi_kh = trim(nl2br($_POST['txtdiachi_kh']));
        $noidung_kh = nl2br($_POST['txtnoidung_kh']);
	//---------------------------------------------------------------

	//------ Kiem Tra Tinh Ton Tai DL Cua Ten, ĐT, ĐChi -------------		
        if($ten_kh != "" and $dienthoai_kh != "" and $diachi_kh != "")
        {
            //------------------ Truy Xuat Ma & SLg Hang Can Mua -----------
			$hang_duoc_mua = "Mã Hàng & SLg :  ";	
            for($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++)
            {
                $hang_duoc_mua = $hang_duoc_mua."[ ".$_SESSION['id_them_vao_gio'][$i]." : ".$_SESSION['sl_them_vao_gio'][$i]." ]  ;  ";
            }      
			//--------------------------------------------------------------
			//------------------ Tao ID_KH Can Them ------------------------
			$sql_id = "SELECT MAX(ID_KH) AS ID_MAX FROM KHACH_HANG";
			$result_id = mysqli_query($conn, $sql_id);
			$rows = mysqli_fetch_array($result_id);
			$id_max = $rows['ID_MAX'] + 1;
			//--------------------------------------------------------------
			//------------------ Truy Xuat Tong So Tien --------------------
			$tong_tien = $_SESSION['tong_tien'];
			//------------------ Them Du Lieu Vao Bang Khach_Hang ----------
            $sql = "INSERT INTO KHACH_HANG (ID_KH, HOTEN_KH, EMAIL_KH, DIACHI_KH, DTHOAI_KH, NOIDUNG_KH, HANG_MUA, TONGTIEN_KH) VALUES (".$id_max.", '" .$ten_kh. "','" .$email_kh. "', '" .$diachi_kh. "', '" .$dienthoai_kh. "', '" .$noidung_kh. "', '" .$hang_duoc_mua. "', ".$tong_tien.");";
			echo "<br>SQL :  ".$sql;
            $result = mysqli_query($conn, $sql);
			if ($result)
			{
				echo "<br> Thanh Cong !";
			}
            unset($_SESSION['id_them_vao_gio']);
            unset($_SESSION['sl_them_vao_gio']);
			unset($_SESSION['DONGIA']);
			header('location:TB_KQMH2.PHP');			
			
//            thong_bao_html_roi_chuyen_trang("Cảm ơn bạn đã mua hàng tại web site chúng tôi","index.php");
        }
        else
        {
            //thong_bao_html("Không được bỏ trống tên người mua , điện thoại , địa chỉ");
            //trang_truoc();
//            exit();
        }
    }
?>
