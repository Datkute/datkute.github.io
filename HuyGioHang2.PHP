<?php 
	session_start();
?>

<?php
            unset($_SESSION['id_them_vao_gio']);
            unset($_SESSION['sl_them_vao_gio']);
			unset($_SESSION['DONGIA']);
			header('location:index.php');			
?>
