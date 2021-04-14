<?php
require_once('dbhelper.php');
$s_masp = $s_tensp = $s_manxb = $s_dongia = $s_hinhanh = $s_mota = $s_chitietsp = '';
	if (!empty($_POST)) {
		$id = '';
		if (isset($_POST['id'])) {
			$s_id = $_POST['id'];
		}
		if (isset($_POST['masp'])) {
			$s_masp = $_POST['masp'];
		}
		if (isset($_POST['tensp'])) {
			$s_tensp = $_POST['tensp'];
		}
		if (isset($_POST['manxb'])) {
			$s_manxb = $_POST['manxb'];
		}
		if (isset($_POST['dongia'])) {
			$s_dongia = $_POST['dongia'];
		}
		if (isset($_POST['hinhanh'])) {
			$s_hinhanh = $_POST['hinhanh'];
		}
		if (isset($_POST['mota'])) {
			$s_mota = $_POST['mota'];
		}
		if (isset($_POST['chitietsp'])) {
			$s_chitietsp = $_POST['chitietsp'];
		}
	//fix lỗi hack sql
		$s_masp = str_replace('\'','\\\'',$s_masp);
		$s_tensp = str_replace('\'','\\\'',$s_tensp);
		$s_manxb = str_replace('\'','\\\'',$s_manxb);
		$s_dongia = str_replace('\'','\\\'',$s_dongia);
		$s_hinhanh = str_replace('\'','\\\'',$s_address);
		$s_mota = str_replace('\'','\\\'',$s_mota);
		$s_chitietsp = str_replace('\'','\\\'',$s_chitietsp);
		$s_id = str_replace('\'','\\\'',$s_id);
	//---------------------
		if ($s_id != '') {
			//update
			$sql = "UPDATE product set masp = '$s_masp', tensp = '$s_tensp', manxb ='$s_manxp', dongia = '$s_dongia', hinhanh = '$s_mota', chitietsp = '$s_chitietsp'  WHERE id = ".$s_id;
		}
		else {
			$sql = 'SELECT * FROM product';
			$studentList = executeResult($sql);
			if ($s_masp == $studentList['masp'] && $s_tensp == $studentList['tensp'] && $s_manxb == $studentList['manxb'] && $s_dongia == $studentList['dongia'] && $s_hinhanh == $studentList['hinhanh'] && $s_mota == $studentList['mota'] && $s_chitietsp == $studentList['chitietsp']) {
				echo "Dữ Liệu Đã Có!";
				header('Location: input.php');
			}else{
				//insert
				$sql = "INSERT INTO product (masp, tensp, manxb, dongia, hinhanh, mota, chitietsp) VALUES ('$s_masp','$s_tensp','$s_manxb','.$s_dongia.','$s_hinhanh','$s_mota','$s_chitietsp')";
			}
		}
		execute($sql);
		header('Location: index.php');
		die();
	}

	$id = '';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = 'SELECT * FROM product WHERE id ='.$id;
		$studentList = executeResult($sql);
		if ($studentList != null && count($studentList) > 0) {
			$std = $studentList[0];
			$s_masp = $std['masp'];
			$s_tensp = $std['tensp'];
			$s_manxb = $std['manxb'];
			$s_dongia = $std['dongia'];
			$s_mota = $std['mota'];
			$s_hinhanh = $std['hinhanh'];
			$s_chitietsp = $std['chitietsp'];
		}else {
			$id = '';
		}
	}
?>

<?php
  include('includes/header.php'); 
  include('includes/navbar.php');
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
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
	<script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page
  
        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('area1');
        }); // convert text area with id area1 to rich text editor.
  
        bkLib.onDomLoaded(function() {
             new nicEditor({fullPanel : true}).panelInstance('area2');
        }); // convert text area with id area2 to rich text editor with full panel.
</script>
<script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
        new nicEditor({maxHeight : 200}).panelInstance('area');
        new nicEditor({fullPanel : true,maxHeight : 200}).panelInstance('area1');
  });
  //]]>
  </script>
	<title>Thêm Măt Hàng</title>
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
	.btn-success{
		margin-left: 45%;
		background-color: aqua;
		width: 100px;
		margin-top: 20px;
	}
</style>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm Mặt Hàng</h2>
			</div>
			<!-- <button class="btn btn-success" onclick="window.open('index.php')">Quay Lại</button> -->
			<div class="panel-body">
				<form method="POST">
					<div class="form-group">
    					<label>Mã Sản Phẩm</label>
    					<input type="number" name="id" value="<?=$id?>" style="display: none;">
    					<input type="text" name="masp" class="form-control" placeholder="Nhập Mã Sản Phẩm" id="fullname" value="<?=$s_masp?>">
  					</div>
  					<div class="form-group">
    					<label for="pwd">Tên Sản Phẩm</label>
   						 <input type="text" name="tensp" class="form-control" placeholder="Nhập Tên Sản Phẩm" id="tensp" value="<?=$s_tensp?>">
  					</div>
  					<div class="form-group">
   						<label for="pwd">Mã Nhà Xuất Bản</label>
    					<input type="text" name="manxb" class="form-control" placeholder="Nhâp Tên Mã Nhà Xuất Bản" id="manxb" value="<?=$s_manxb?>">
  					</div>
  					<div class="form-group">
    					<label for="pwd">Đơn Giá</label>
    					<input type="number" name="dongia" class="form-control" placeholder="Nhâp Đơn Giá" id="dongia" value="<?=$s_dongia?>">
  					</div>
  					<div class="form-group">
    					<label for="pwd">Mô Tả Sản Phẩm</label>
    					<input type="text" name="mota" class="form-control" placeholder="Nhập Mô Tả Sản Phẩm" id="mota" value="<?=$s_mota?>">
  					</div>
  					<div class="form-group">
    					<label for="pwd">Hình Ảnh </label>
    					<input type="text" name="hinhanh" class="form-control" placeholder="Nhập Link Hình Ảnh" id="hinhanh" value="<?=$s_hinhanh?>">						
  					</div>
					  <div class="form-group">
    					<label for="pwd">Chi Tiết Sản Phẩm</label>
    					<div id="sample">
  							<textarea name="chitietsp" id="chitietsp"  value="<?=$s_chitietsp?>" style="width:80%;height:200px;">
       							Nhập Chi Tiết của Sản Phẩm Vào Đây!
  							</textarea>
						</div>
  					</div>
  					<button type="submit" class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>