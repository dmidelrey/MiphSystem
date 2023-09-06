<?php
include "datab.php";
?>
<?php
require_once('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	
	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/alert.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="assets/img/calculator.png">

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <title>Успеваемость</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
  <body>

    <div id="wrapper">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Навигация</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <div class="span3">&nbsp;&nbsp;&nbsp;&nbsp;<img class="index_logo" height="45" width="100" src="assets/img/logosmall.png"></div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;<?php
				//Check to see if the user is logged in.
				
				if(isset($_SESSION['login']))
				{ 
				$login=$_SESSION['login'];
				$pass=$_SESSION['pass'];
				$result = mysql_query("SELECT * FROM tenant WHERE login='$login' AND pass='$pass'"); 
				$myrow = mysql_fetch_array($result);
				$fname=$myrow['fname'];
				$mname=$myrow['mname'];
				echo 
				"".$fname. "&nbsp;".$mname. " ";
				}

				?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
					<li class="divider"></li>
                    <li>
                        <a href="session_logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Выйти</a>
                    </li>
                    </ul>
                </li>
            </ul>
           <?php include "header1.php";?>
        </nav>
			<div id="page-wrapper">
            <div class="container-fluid">
			<br>
			<br>
			<br>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<div class="container-fluid">
<div class="row-fluid"> 
<div class="p">

   
 </div>

</div>
</div>
</head>
</div>
<nav>
			
			<link href="css/table1.css" rel="stylesheet" type="text/css" />
			<form method="post">
			<div class="control-label" align="right">
<br>
<br>
<br>
<br>
<br>
				<table class="table" cellspacing="0" border="0" class="table" id="example">
				<thead>
				<tr class="head">
				<?php 
				$id = $_GET['id'];
						$query1=mysql_query("select * FROM zadachi where zada_id = '$id'")or die(mysql_error());
						while($zad=mysql_fetch_array($query1)){
							$kek=1;
							$kolvo=$zad['kolvo'];
						while($kek<=$zad['kolvo']) {
				?>
				<th><?php echo $kek; ?></th>
				<?php $kek=$kek+1; }?>
				<th><?php echo $zad['zadacha1']; ?></th>
				<?php }?>
				</tr>
				 <script>
				$(function() {
							
				 });
				 </script>
				</thead>
						<?php 
						if(isset($_SESSION['login']))
													{ 
							$login=$_SESSION['login'];
							$pass=$_SESSION['pass'];
							$result = mysql_query("SELECT * FROM tenant WHERE login='$login' AND pass='$pass'"); 
							$rec = mysql_fetch_array($result);
							$sum=0;
						?>
						<tr class="edit_tr">
						<?php 
						$lik=$rec['tenant_id'];
						$kek=1;
						
						while($kek<=$kolvo) {
							$huh=0;
							
						$query2=mysql_query("select * FROM tenantzad where tenant_id='$lik' AND zada_id = '$id'")or die(mysql_error());
						while($rec1=mysql_fetch_array($query2)){
							
							if ($rec1['zad_id']==$kek)
							{
								$huh=$huh+1;?>
								<td><?php echo $rec1['reshil'] ?></td>
								<?php $sum=$sum+$rec1['reshil'];
							}
							
							}if ($huh==0) 
								{
								?>
								<td>0</td>
								<?php 
							}
							
							$kek=$kek+1;
						?>
						
						<?php }?>
						<td><?php echo $sum ?></td>
						<?php }?></tr>
							</table>
							</div>
							</form>
							</nav>
							</html>
							<div class="empty">
<a href="#" class="btn btn-primary" onclick="window.print()" id="print" ><i class="fa fa-print"></i> Печать</a></button>
</div></div></div></div></div>
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	<?php include('script.php'); ?>
</body>

</html>