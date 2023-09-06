<?php
include "datab.php";
?>
<?php
require_once('session1.php');
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
    <title>Знания (личные баллы)</title>

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

        <!-- Navigation -->
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
            <ul class="nav navbar-right top-nav">
                        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;<?php
				//Check to see if the user is logged in.
				
				if(isset($_SESSION['fname']))
				{ 
				echo 
				"".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
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

                <!-- Page Heading -->
                <div id="page-wrapper">
				<br>
				<nav>
				<center><h4><strong>Таблица знаний</strong><h4></center>
					
                            <div class="navbar navbar-inner block-header">
							 <?php	
	                   $count_client=mysql_query("select * from admin");
	                   $count = mysql_num_rows($count_client);
                       ?>	
					   
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Потверждение</h4>
							  </div>
							  <div class="modal-body">
							   Уверены что хотите удалить прибывающих? Отменить это действие будет невозможно
							  </div>
							  <div class="modal-footer">
							  <form method = "POST">
								<input type="submit" name="delete" value = "Удалить" class="btn btn-danger">
								
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							 
							  </div>
							</div>
						  </div>
						</div>
						<?php
						if(isset($_POST['delete'])){
							$id=$_POST['selector'];
							
							$N = count($id);
							for($i=0; $i < $N; $i++)
							{
								$result = mysql_query("DELETE FROM tenant where tenant_id='$id[$i]'");
							}
							}
							?>
                        <!-- block -->						
                        <div id="block_bg" class="block">	
                            <div class="navbar navbar-inner block-header">
							<br>
							&nbsp;&nbsp;&nbsp;<button type='button' class="btn btn-danger" data-toggle='modal' data-target='#myModal'><i class="glyphicon glyphicon-trash"></i></button>&nbsp;<input type="submit" name="color" value = "Выделить красным" class="btn btn-danger">
							<?php
						if(isset($_POST['color'])){
							$id=$_POST['selector'];
							
							$N = count($id);
							for($i=0; $i < $N; $i++)
							{
								$result = mysql_query("UPDATE tenant set color='red' where tenant_id='$id[$i]'");
							}
							}
							?>&nbsp;<input type="submit" name="colorblack" value = "Снять выделение" class="btn btn-default">
							<?php
							if(isset($_POST['colorblack'])){
							$id=$_POST['selector'];
							
							$N = count($id);
							for($i=0; $i < $N; $i++)
							{
								$result = mysql_query("UPDATE tenant set color='' where tenant_id='$id[$i]'");
							}
							}
							?><a button type='button' class="btn btn-primary" href="water.php">Назад</a>
							&nbsp;<input type="submit" name="wateru" value = "-1 (Математика)" class="btn btn-success">
							<?php
							if(isset($_POST['wateru'])){
							$id=$_POST['selector'];
							
							$N = count($id);
							for($i=0; $i < $N; $i++)
							{
								$result = mysql_query("UPDATE tenant set water=water-1 where tenant_id='$id[$i]'");
							}
							}
							?>&nbsp;<input type="submit" name="waterru" value = "-1 (Информатика)" class="btn btn-success">
							<?php
							if(isset($_POST['waterru'])){
							$id=$_POST['selector'];
							
							$N = count($id);
							for($i=0; $i < $N; $i++)
							{
								$result = mysql_query("UPDATE tenant set waterr=waterr-1 where tenant_id='$id[$i]'");
							}
							}
							?>&nbsp;<input type="submit" name="waterrru" value = "-1 (Физика)" class="btn btn-success">
							<?php
							if(isset($_POST['waterrru'])){
							$id=$_POST['selector'];
							
							$N = count($id);
							for($i=0; $i < $N; $i++)
							{
								$result = mysql_query("UPDATE tenant set waterrr=waterrr-1 where tenant_id='$id[$i]'");
							}
							}
							?>&nbsp;<input type="submit" name="waterrrru" value = "-1 (Практика)" class="btn btn-success">
							<?php
							if(isset($_POST['waterrrru'])){
							$id=$_POST['selector'];
							
							$N = count($id);
							for($i=0; $i < $N; $i++)
							{
								$result = mysql_query("UPDATE tenant set  waterrrr=waterrrr-1 where tenant_id='$id[$i]'");
							}
							}
							?>
							
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								<div class="table-responsive">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										<thead>
										  <tr>
										  <th></th>
												<th><center>Уровень</center></th>
												<th><center>Отряд</center></th>
												<th><center>Фамилия</center></th>
												<th><center>Имя</center></th>
												<th><center>Отчество</center></th>
												<th><center>Математика</center></th>
												<th></th>
												<th><center>Информатика</center></th>
												<th></th>
												<th><center>Физика</center></th>
												<th></th>
												<th><center>Практика</center></th>
												<th></th>
												<th><center>Сумма</center></th>
												
										   </tr>
										</thead>
										<tbody>
						<?php 
						
						$query=mysql_query("SELECT * FROM tenant LEFT JOIN room
													ON tenant.room_id=room.room_id")or die(mysql_error());
						$rows=mysql_num_rows($query);
						while($rec=mysql_fetch_array($query)){
						$id = $rec['room_id'];
						$tenant = $rec['tenant_id'];
						$sum = $rec['water'] + $rec['waterr'] + $rec['waterrr'] + $rec['waterrrr'];
						?>
						<tr class="edit_tr">
						<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $tenant; ?>">
												</td>
												<td style="color:<?php echo $rec['color']; ?>"><center><h5><?php echo $rec['level']; ?></h5></center></td>
						<td style="color:<?php echo $rec['color']; ?>"><center><h5><?php echo $rec['room_name']; ?></h5></center></td>
						<td style="color:<?php echo $rec['color']; ?>"><center><h5><?php echo $rec['fname']; ?></h5></center></td>
						<td style="color:<?php echo $rec['color']; ?>"><center><h5><?php echo $rec['mname']; ?></h5></center></td>
						<td style="color:<?php echo $rec['color']; ?>"><center><h5><?php echo $rec['lname'] ?></h5></center></td>
						<td width="100"><input type='text' readonly class="form-control input-md" value="<?php echo $rec['water']; ?>"></td>
						<td><center><input type="submit" name="water<?php echo $rec['tenant_id']; ?>" class="btn btn-success" title="Нажми на меня" value="-1"><input type='hidden' name='rows' value=<?php echo $tenant; ?>></center></td>
						<td width="100"><input type='text' readonly class="form-control input-md" value="<?php echo $rec['waterr']; ?>"></td>
						<td><center><input type="submit" name="waterr<?php echo $rec['tenant_id']; ?>" class="btn btn-success" title="Нажми на меня" value="-1"><input type='hidden' name='rows' value=<?php echo $tenant; ?>></center></td>
						<td width="100"><input type='text' readonly class="form-control input-md" value="<?php echo $rec['waterrr']; ?>"></td>
						<td><center><input type="submit" name="waterrr<?php echo $rec['tenant_id']; ?>" class="btn btn-success" title="Нажми на меня" value="-1"><input type='hidden' name='rows' value=<?php echo $tenant; ?>></center></td>
						<td width="100"><input type='text' readonly class="form-control input-md" value="<?php echo $rec['waterrrr']; ?>"></td>
						<td><center><input type="submit" name="waterrrr<?php echo $rec['tenant_id']; ?>" class="btn btn-success" title="Нажми на меня" value="-1"><input type='hidden' name='rows' value=<?php echo $tenant; ?>></center></td>
						<td style="color:<?php echo $rec['color']; ?>"><center><h5><?php echo $sum ?></h5></center></td>
						
						</tr><?php }?><?php 
						$query=mysql_query("SELECT * FROM tenant LEFT JOIN room
													ON tenant.room_id=room.room_id")or die(mysql_error());
						$rows=mysql_num_rows($query);
						while($rec=mysql_fetch_array($query)){
						if(isset($_POST['water'.$rec['tenant_id']]))
						{
							$tenant=$rec['tenant_id'];
							$water=$rec['water']-1;
							mysql_query("UPDATE tenant set water='$water' where tenant_id='$tenant'");
							?>
							<script>
window.location = "waterminus.php";
</script>
<?
						}
						if(isset($_POST['waterr'.$rec['tenant_id']]))
						{
							$tenant=$rec['tenant_id'];
							$water=$rec['waterr']-1;
							mysql_query("UPDATE tenant set waterr='$water' where tenant_id='$tenant'");
							?>
							<script>
window.location = "waterminus.php";
</script>
<?
						}
						if(isset($_POST['waterrr'.$rec['tenant_id']]))
						{
							$tenant=$rec['tenant_id'];
							$water=$rec['waterrr']-1;
							mysql_query("UPDATE tenant set waterrr='$water' where tenant_id='$tenant'");
							?>
							<script>
window.location = "waterminus.php";
</script>
<?
						}
						if(isset($_POST['waterrrr'.$rec['tenant_id']]))
						{
							$tenant=$rec['tenant_id'];
							$water=$rec['waterrrr']-1;
							mysql_query("UPDATE tenant set waterrrr='$water' where tenant_id='$tenant'");
							?>
							<script>
window.location = "waterminus.php";
</script>
<?
						}
						}
						?>
						</tbody>
						</table>
						</form>
						 </div>
                            </div>
							<center><h5>Если совершили ошибку или нашли баг, обращайтесь <a href="https://vk.com/dmitriievs">сюда</a></h5><center>
                        </div>
					</div>
									
</nav>
</div>
</div>										
</div></div>
    </div>
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	<?php include('script.php'); ?>
</body>
</html>
