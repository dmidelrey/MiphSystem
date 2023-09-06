<?php
include "datab.php";
?>
<?php
session_start();
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
    $username = clean($_POST['username']);
	$password = clean($_POST['password']);
	$fname = ($_POST['fname']);
	$lname = ($_POST['lname']);
	$qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result=mysql_query($qry);
if($result) {
		if(mysql_num_rows($result) > 0 ) {
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['username'] = $member['username'];
			$_SESSION['password'] = $member['password'];
			$_SESSION['fname'] = $member['fname'];
			$_SESSION['lname'] = $member['lname'];
			
			
			session_write_close();
			header("location: homepage.php?");
			exit();
			}
		
		else {
			$qry="SELECT * FROM tenant WHERE login='$username' AND pass='$password'";
			$result=mysql_query($qry);
			if($result) {
		if(mysql_num_rows($result) > 0 ) {
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['login'] = $member['login'];
			$_SESSION['pass'] = $member['pass'];
			$_SESSION['fname'] = $member['fname'];
			$_SESSION['mname'] = $member['mname'];
			session_write_close();
			header("location: userhomepage.php");
			exit();
			}
			else
			{
			header("location: login_error.php");
			exit();
			}
		}
		}
}
	else {
		die("Query failed");
	}	
	

?>