<?php
	session_start();
?>
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
	.form-control{
		width: 400px;
	}
</style>
 
  <body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Quản lý thông tin Sản Phẩm
			</div>
		</div>
				<?php
					// Nếu người dùng submit form thì thực hiện
					if (isset($_REQUEST['submit_ad'])) 
					{
						// Gán hàm addslashes để chống sql injection
						$search = addslashes($_GET['search_ad']);
			
						// Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
						if (empty($search)) {
							echo "Yeu cau nhap du lieu vao o trong";
						} 
						else
						{
							// Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
							$query = "SELECT * FROM PRODUCT where TENSP like '%$search%'";
			
							// Kết nối sql
							include('../Cnn-db.php');
							// Thực thi câu truy vấn
							
							$sql = mysqli_query($conn, $query);
			
							// Đếm số đong trả về trong sql.
							$num = mysqli_num_rows($sql);
			
							// Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
							if ($num > 0 && $search != "") 
							{
								// Dùng $num để đếm số dòng trả về.
								echo"";
								echo "<p class='tb'><a href='index.php'><button class='btn-back'>
										<i class='fas fa-long-arrow-alt-left'></i>
									</button></a>&nbsp;&nbsp;&nbsp;&nbsp; $num Kết Quả Tìm Kiếm Với Từ Khóa Tên: <b>$search</b>!</p>";
								$_GET['search_ad'];
								$i = 1;
								while($rows =mysqli_fetch_array($sql))
								{
										echo'<div class="panel-body">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>STT</th>
													<th>Mã SP</th>
													<th>Tên SP</th>
													<th>Mã NXB</th>
													<th>Đơn Giá</th>
													<th>Hình Ảnh</th>
													<th>Mô Tả</th>
												</tr>
											</thead>
											<tr>
												<td>'.($i++).'</td>
												<td>'.$rows['MASP'].'</td>
												<td>'.$rows['TENSP'].'</td>
												<td>'.$rows['MANXB'].'</td>
												<td>'.$rows['DONGIA'].'</td>
												<td><img src="'.$rows['HINHANH'].'" alt="photo"></td>
												<td>'.$rows['MOTA'].'</td>
												
											</tr>
										</table>
									</div>';
								}
									echo'<button class="btn btn-success" onclick="window.open("input.php")">Thêm Sản Phẩm</button>';
									echo'<button class="btn btn-success" onclick="window.open("delete.php")">Xóa Sản Phẩm</button>';
							}else{
								echo 'Khong tim thay ket qua!';
							}
						}
					}
					?>
	</div>	<!-------------------------------->
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
			$.post('delete_student.php');{
				'id' : id
			},function(data){
				alert(data);
				location.reload();
			})
		}
	</script> -->
</body>
</html>
