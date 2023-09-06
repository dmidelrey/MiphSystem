<?php
include "datab.php";
		if(isset($_POST['delete'])){
		
		$id=$_POST['selector'];
		
		$N = count($id);
		for($i=0; $i < $N; $i++)
		{
			$result = mysql_query("DELETE FROM tenant where tenant_id='$id[$i]'");
		}
	}
		$user_query = mysql_query("SELECT * FROM room")or die(mysql_error());
		while($row = mysql_fetch_array($user_query)){
		$id = $row['room_id'];
		}?>
	<script>
alert('Успешно удален');
window.location = "view_tenant.php?id=<?php echo $id;?>";
</script>