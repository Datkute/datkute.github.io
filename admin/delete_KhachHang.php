<?php 
	if (isset($_POST['ID_KH'])) {
		$id = $_POST['ID_KH'];
		$sql = 'DELETE FROM khach_hang WHERE ID_KH = '.$id;
		require_once('dbhelper.php');
		execute($sql);
		echo 'Xóa Đơn Đặt Hàng thành công';
	}
 ?>