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
	footer p{
		margin-top: 80px;
		text-align: center;
	}
</style>
 
  <body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				DANH SÁCH ĐƠN ĐẶT HÀNG
			</div>
		</div>
			<form method="GET">
					<input type="text" name="s" class="form-control" style="margin-top: 15px;margin-bottom: 15px" placeholder="Tìm Kiếm Sản Phẩm">
			</form>
		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
            			<th>STT</th>
                        <th>ID Khách Hàng</th>
						<th>Họ Tên KH</th>
						<th>Email</th>
						<th>Địa Chỉ</th>
						<th>Điện Thoại</th>
            			<th>Mã Hàng & Số Lượng</th>
            			<th>Tổng Tiền</th>
                        <th>Thời Gian</th>
						<th width="60px">Delete</th>
					</tr>
				</thead>
				<tbody>
				
					<?php
					$sql = 'SELECT * FROM khach_hang';
					$KhachHang = executeResult($sql);
					$i = 1;
					foreach ($KhachHang as $KH){
					echo'<tr align="center">
						<td>'.($i++).'</td>
            			<td>'.$KH['ID_KH'].'</td>
            			<td>'.$KH['HOTEN_KH'].'</td>
            			<td>'.$KH['EMAIL_KH'].'</td>
						<td>'.$KH['DIACHI_KH'].'</td>
						<td>'.$KH['DTHOAI_KH'].'</td>
						<td>'.$KH['HANG_MUA'].'</td>
                        <td>'.$KH['TONGTIEN_KH'].'</td>
                        <td>'.$KH['THOIGIAN_KH'].'</td>
						<td><button class="btn btn-danger" onclick ="delete_KH('.$KH['ID_KH'].')">Delete</button></td>
					</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<!-------------------------------->
	<footer>
		<p>
			Copyright &copy; Đạt - Thái - Hiếu
		</p>
	</footer>
	<!-------------------------------->
	<script type="text/javascript">
		function delete_KH(ID){
			option = confirm('Bạn có muốn xóa hay không');
			if (!option) {
				return;  
			}
			console.log(ID);
			$.post('delete_KhachHang.php',{
				'ID_KH' : id
			},function(data){
				alert(data);
				location.reload();
			})
		}
	</script>
</body>
</html>
