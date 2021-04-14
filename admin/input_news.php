<?php
require_once('dbhelper.php');
$s_id = $s_ten = $s_noidung = $s_chitietnd = $s_hinhanh = '';
	if (!empty($_POST)) {
		$id = '';
		if (isset($_POST['id'])) {
			$s_id = $_POST['id'];
		}
		if (isset($_POST['ten'])) {
			$s_masp = $_POST['ten'];
		}
		if (isset($_POST['noidung'])) {
			$s_tensp = $_POST['noidung'];
		}
		if (isset($_POST['manxb'])) {
			$s_manxb = $_POST['chitietnd'];
		}
		
		if (isset($_POST['hinhanh'])) {
			$s_hinhanh = $_POST['hinhanh'];
		}
	//fix lỗi hack sql
		$s_id = str_replace('\'','\\\'',$s_masp);
		$s_ten = str_replace('\'','\\\'',$s_tensp);
		$s_noidung = str_replace('\'','\\\'',$s_manxb);
		$s_chitietnd = str_replace('\'','\\\'',$s_dongia);
		$s_hinhanh = str_replace('\'','\\\'',$s_address);
	//---------------------
		if ($s_id != '') {
			//update
			$sql = "UPDATE tin_tuc set id = '$s_id', ten = '$s_ten', noi_dung ='$s_noidung', chitiet_noidung = '$s_chitietnd', hinh_anh = '$s_hinhanh' WHERE id = ".$s_id;
		}
		else {
			$sql = 'SELECT * FROM tin_tuc';
			$newsList = executeResult($sql);
			if ($s_id == $newsList['id'] && $s_ten == $newstList['ten'] && $s_noidung == $newsList['noi_dung'] && $s_chitietnd == $newsList['chitiet_noidung'] && $s_hinhanh == $newsList['hinh_anh']) {
				echo "Dữ Liệu Đã Có!";
				header('Location: input_news.php');
			}else{
				//insert
				$sql = "INSERT INTO tin_tuc (id, ten, noi_dung, chitiet_noidung, hinhanh) VALUES ('$s_id','$s_ten','$s_noidung','.$s_chitietnd.','$s_hinhanh')";
			}
		}
		execute($sql);
		header('Location: ../all_news.php');
		die();
	}

	$id = '';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = 'SELECT * FROM tin_tuc WHERE id ='.$id;
		$newsList = executeResult($sql);
		if ($newsList != null && count($studentList) > 0) {
			$std = $newsList[0];
			$s_id = $std['id'];
			$s_ten = $std['ten'];
			$s_noidung = $std['noi_dung'];
			$s_chitietnd = $std['chitiet_noidung'];
			$s_hinhanh = $std['hinh_anh'];
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
				<h2 class="text-center">Thêm Tin Tức</h2>
			</div>
			<!-- <button class="btn btn-success" onclick="window.open('index.php')">Quay Lại</button> -->
			<div class="panel-body">
				<form method="POST">
					<div class="form-group">
    					<label>ID</label>
    					<input type="number" name="id" value="<?=$id?>" style="display: none;">
    					<input type="text" name="id" class="form-control" placeholder="Nhập ID" id="id" value="<?=$s_id?>">
  					</div>
  					<div class="form-group">
    					<label for="pwd">Tên Tin Tức</label>
   						 <input type="text" name="ten" class="form-control" placeholder="Nhập Tên Tin Tức" id="ten" value="<?=$s_ten?>">
  					</div>
  					<div class="form-group">
   						<label for="pwd">Nội Dung Tiêu Đề</label>
    					<input type="text" name="noidung" class="form-control" placeholder="Nhâp Nội Dung Tiêu Đề Của Tin Tức" id="noidung" value="<?=$s_noidung?>">
  					</div>
  					<div class="form-group">
    					<label for="pwd">Chi Tiết Của Nội Dung</label>
    					<div id="sample">
  							<textarea name="chitietnd" id="chitietnd"  value="<?=$s_chitietnd?>" style="width:80%;height:200px;">
       							Nhập Chi Tiết Nội Dung Tin Tức Vào Đây!
  							</textarea>
						</div>
  					</div>
  					<div class="form-group">
    					<label for="pwd">Hình Ảnh</label>
    					<input type="text" name="hinhanh" class="form-control" placeholder="Nhập Hình Ảnh" id="hinhanh" value="<?=$s_hinhanh?>">
  					</div>
  					
  					<button type="submit" class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>