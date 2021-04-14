<?php 
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$sql = 'DELETE FROM product WHERE ID = '.$id;
		require_once('dbhelper.php');
		execute($sql);
		echo 'Xóa mặt hàng thành công';
	}
 ?>