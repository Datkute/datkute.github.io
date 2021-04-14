<?php 
	session_start();
?>

<?php
    for($i = 0; $i<count($_SESSION['id_them_vao_gio']); $i++)
    {
        $name_id = "id_".$i;
        $name_sl = "sl_".$i;
		echo "<br>$name_id  =  ".$name_id;
		echo "<br>$name_sl  =  ".$name_sl;		
        if(isset($_POST[$name_id]))
        {
      		$_SESSION['id_them_vao_gio'][$i] = $_POST[$name_id];
			$_SESSION['sl_them_vao_gio'][$i] = $_POST[$name_sl];
			$id1 = $_SESSION['id_them_vao_gio'][$i];
			$sl1 = $_SESSION['sl_them_vao_gio'][$i];
			echo "<b><br>I =  " .$i."</p>";
			echo "<br>SESSION_ID  :  " .$id1;
			echo "<br>SESSION_SL  :  " .$sl1;
        }
    }
	header('location:cart.php');
?>
