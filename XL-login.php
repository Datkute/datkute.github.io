<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
	session_start();
?>
<?php
		include ("Cnn-db.php");
		$user = $_POST['txtuser'];
		$pass = $_POST['txtpass'];
		$sql = "SELECT * FROM dangnhapkh WHERE USER = '".$user."' AND PASS = '".$pass."' ";
		//$sql = "SELECT USER, PASS  FROM dangnhap-kh WHERE USER = '".$user."' AND PASS = '".$pass."' ";
		//$sql = "SELECT * FROM USER WHERE USER = '".$user."' AND PASS = '".$pass."' ";
		$result = mysqli_query($conn, $sql);  
		$num = mysqli_num_rows($result);
		if ($num >=1)
				header("Location: index.php");	
		else
		{
				$_SESSION['TB'] = "Usernam Hoac Password Sai !";
				$_SESSION['USER'] = $user;
				header("Location: login.php");	
		}
?>
<body>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</body>
</html>
