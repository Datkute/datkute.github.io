<?php
  include('../Cnn-db.php');
  include('includes/header.php'); 
  include('includes/navbar.php');
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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title></title>
</head>
<style type="text/css">
	.panel-heading{
		padding-top: 13px; 
		text-align: center;
		font-size: 1.5em;
		background: aqua;
		color: red;
		height: 3em;
		font-weight: 700;
	}
    form{
        background-color: none;
        margin-top: 15px;
    }
    .strong{
        font-size: 1em;
        margin-top: 10px;
        color: orange;
        margin-left: 100px;
    }
    .btn-success{
        margin-left: 50px;
    }
</style>
 
<body>
<h2 class="panel-heading" align="center">Xóa Sản Phẩm</h2>
<?php
//==============================================
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
//------------------------------------------
$num = mysqli_num_rows($result); //So Mau Tin
?>
    <button class="btn btn-success" onclick="window.open('index.php')">Quay Lại</button>
    <strong class="strong">Tổng số sản phẩm : <?=$num?></strong>       
    <form name="form1" method="post" action="" align="center">
        <table width="1000px" border="1" align="center" cellpadding="10" cellspacing="5" >
            <tr>
                <td align="center"><strong>STT</strong></td>
                <td align="center"><strong>Chọn Xóa</strong></td>
                <td align="center"><strong>Mã Sản Phẩm</strong></td>
                <td align="center"><strong>Tên Sản Phẩm</strong></td>
                <td align="center"><strong>Mã Nhà SX</strong></td>
                <td align="center"><strong>Đơn Giá</strong></td>
            </tr>
<?php
    $i = 1;
    while ($rows = mysqli_fetch_array($result))
    {
?>
            <tr>
                <td align="center"><?=$i?></td>
                <td><input name="chkbox[]" type="checkbox" value="<?=$rows['id']?>"></td>
                <td align="center"><?=$rows['MASP']?></td>
                <td align="center"><?=$rows['TENSP']?></td>
                <td align="center"><?=$rows['MANXB']?></td>
                <td align="center"><?=$rows['DONGIA']?></td>
<?php
    $i = $i + 1;
}
?>
            <tr>
                <td colspan="6" align="center">
                    <input class="btn btn-success" name="cmddel" type="submit" value=" Delete ">
                </td>
            </tr>
<?php
//=== DOAN CHUONG TRINH XOA CAC MAU TIN DUOC CHON ===
//---- Kiem Tra Neu Nut Xoa Duoc Click Khong ------------ `
    if(isset($_POST['cmddel']))
    {
        $smt = array(); //Tao Bien Mang : 'smt'
        $smt = 0;
        if (isset($_POST['chkbox'])){
	        $smt = count($_POST['chkbox']); //So Check Duoc Chon
        }
        for($i = 0; $i < $smt; $i++)
        {
            $del_ma = $_POST['chkbox'][$i];
            $sql = "DELETE FROM product WHERE id ='".$del_ma."'";
            $result = mysqli_query($conn, $sql);
        }
// ------ K.Tra Neu Xoa Thanh Cong Thi Chuyen Huong Trang Web : 'URL' ----
        if($result) {
//--------- Chuyen Huong TRang Web ---------------------------
            echo "<meta http-equiv=\"refresh\"content=\"0;URL=delete.php\">";
        }
    }
    mysqli_close($conn);
?>
        </table>
    </form>
</body>
</html>
