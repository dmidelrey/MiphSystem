<?php
include "datab.php";
		if(isset($_POST['delete'])){
		
		$id=$_POST['selector'];
		
		$N = count($id);
		for($i=0; $i < $N; $i++)
		{
			$result = mysql_query("DELETE FROM admin where admin_id='$id[$i]'");
		}
			header("location:manage_account.php");
			
	}
	?>