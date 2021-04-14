<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<?PHP
	session_start();
	$sdt = $_POST['txtuser'];
	$email = $_POST['txtemail'];
	$mk = $_POST['txtpass'];
	include ('Cnn-db.php');
	$sql = "INSERT INTO DANGNHAP-KH (USER, PASS , EMAIL) VALUES ('" .$sdt. "', '" .$email. "', '" .$mk.  "')";
	//$sql="INSERT INTO resigter VALUES ('" .$sdt. "', '" .$email. "', '" .$mk.  "')";
	$resual = mysqli_query($conn, $sql);
	$affectrow = mysqli_affected_rows($conn);
	mysqli_close($conn);
	if ($affectrow >=1)
		header("Location: login.php");
	else
	{
		$_SESSION['TB'] = "Tài Khoản Đã Tồn Tại!";
		$_SESSION['USER'] = $user;
		header("Location: login.php");	
	}
?>
<p align="center"> <font size="20"> So mau tin them vao <?= $affectrow?></font></p>

</body>
</html>