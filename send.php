<?php
include "datab.php";
?>
<?php
require_once('session1.php');
?>
<!DOCTYPE html>
<html>
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

	<?php
				setlocale(LC_ALL, 'ru_RU.UTF-8');
				
				$mon = strftime('%Y',time());
				$id=$_GET['id'];
						$query=mysql_query("SELECT * FROM tenant WHERE tenant_id = $id")or die(mysql_error());
						$row=mysql_fetch_array($query);
						$room_id=$row['room_id'];
						$color=$row['color'];
				?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <title>МИФ | <?php echo $row['fname']."&nbsp;".$row['mname']."&nbsp;".$row['lname']?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Навигация</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <div class="span3">&nbsp;&nbsp;&nbsp;&nbsp;<img class="index_logo" height="45" width="100" src="assets/img/logosmall.png"></div>
            </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;<?php
				if(isset($_SESSION['fname']))
				{ 
				echo 
				"".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
				$kek = $_SESSION['username'];
				$use = mysql_query("select * from admin where username='$kek'")or die(mysql_error());
				$ro = mysql_fetch_array($use);
				$idadm = $ro['admin_id'];
				}
				?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
					<li>
                        <a href="manage_account.php"><i class="fa fa-users fa-lg"></i>&nbsp;Аккаунты</a>
                    </li>
					<li class="divider"></li>
                    <li>
                        <a href="session_logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Выйти</a>
                    </li>
                    </ul>
                </li>
            </ul>
           <?php include "header.php";?>
        </nav>
        <div id="page-wrapper">
		<br>
			<br>
            <div class="container-fluid">
			<nav>
			<head>
      <div class="row">
              <div id="g-site1" class="col-xs-12">
                  <div class="demo-container">
					
						<div id="block_bg" class="block">	
                            <div class="navbar navbar-inner block-header">
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method = "POST"><TEXTAREA NAME="content" cols="40" rows="3" placeholder="Ваше сообщение" required></TEXTAREA><BR>
<input type="submit" value="Отправить" name="submit" class="btn btn-success"><BR>
					<br>
								<?php
							$kek = $_SESSION['username'];
							$user = mysql_query("select * from admin where username='$kek'")or die(mysql_error());
							$ror = mysql_fetch_array($user);
							$kek = $ror['admin_id'];
						$id=$_GET['id'];
						$user_query = mysql_query("select * from mess WHERE to_id='$kek' AND from_id='$id' OR from_id='$kek' AND to_id='$id' ORDER BY date DESC")or die(mysql_error());
						while($row = mysql_fetch_array($user_query)){
							if ($row['to_id'] == $kek) { $idf = $row['from_id']; }
							if ($row['from_id'] == $kek) { $idf = $row['to_id']; }
							$mess = $row['mess_id']; 
							if ($row['flag'] == 1) { mysql_query("UPDATE mess SET flag=0 WHERE mess_id='$mess'")or die(mysql_error()); }
							$ui = mysql_query("select * from tenant WHERE tenant_id=$idf")or die(mysql_error());
							$row1 = mysql_fetch_array($ui);
						?>
						<div style="margin-top:5px;" id="message_box">
												<strong><?php if ($row['to_id'] == $kek) { echo $row1['fname']."&nbsp;".$row1['mname']; } else { echo $_SESSION['fname']."&nbsp;".$_SESSION['lname']; } ?></strong><br><?php echo $row['mess'] ?><br>
												<h6><?php echo $row['date'] ?></h6><br>
											</div>
											
							
						<? } ?>
					<br>
					</form>
					<?
					if (isset($_POST['submit'])){
					if (isset($_POST['content'])) { $content = $_POST['content']; if ($content == '') { unset($content);} }
					$data = date('G:i:s m.j.Y');
					$query = "INSERT INTO mess (to_id, from_id, mess, date, flag) VALUES ('$id', '$kek', '$content', '$data', '1')";
					$result = mysql_query($query);
					}?>
					</div>
					</div>
					</div>
					</div>
                </div>
                      </div><br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br></div></div>
			</head></nav></div></div></div></div>
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	<?php include('script.php'); ?>
</body>
</html>
