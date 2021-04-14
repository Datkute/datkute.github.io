<?php
	session_start();
?>
<?php
  include('../Cnn-db.php');
  include('includes/header.php'); 
  include('includes/navbar.php');
  require_once('dbhelper.php');
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
	.form-control{
		width: 400px;
	}
</style>
 
  <body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Quản lý Tin Tức
			</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
            			
						<th>Mã TT</th>
						<th>Tên Tin Tức</th>
						<th>Nội Dung</th>
            			<th>Hình Ảnh</th>
						<th width="60px">Edit</th>
						<th width="60px">Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$sql = 'SELECT * FROM tin_tuc';
						$productList = executeResult($sql);
						$i = 1;
						foreach ($productList as $std)
						{
							echo'<tr>
								
								<td>'.$std['id'].'</td>
								<td>'.$std['ten'].'</td>
								<td>'.$std['noi_dung'].'</td>
								<td><img style="width: 150px" src="'.$std['hinh_anh'].'" alt="photo"></td>
								<td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$std['id'].'","_self")\' >Edit</button></td>
								<td><button class="btn btn-danger" onclick ="deleteStudent('.$std['id'].')">Delete</button></td>
								</tr>';
						}	
					?>
				</tbody>
			</table>
			<button class="btn btn-success" onclick="window.open('input.php')">Thêm Sản Phẩm</button>
			<button class="btn btn-success" onclick="window.open('delete.php')">Xóa Sản Phẩm</button>
		</div>
	</div>
	<!-------------------------------->
	<footer>
		<p>
			Copyright &copy; Đạt - Thái - Hiếu
		</p>
	</footer>
	<!-------------------------------->
	<!-- <script type="text/javascript">
		function deleteStudent(id){
			option = confirm('Bạn có muốn xóa hay không');
			if (!option) {
				return;  
			}
			console.log(id);
			$.post('delete_student.php',{
				'id' : id
			},function(data){
				alert(data);
				location.reload();
			})
		}
	</script> -->
</body>
</html>
