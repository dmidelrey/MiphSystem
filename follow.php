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
    <title>Подписки | Пребывающие</title>

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
            <div class="container-fluid">
				<nav>
				<center><h4><strong>Пребывающие, за которыми вы следите</strong><h4></center>
				<div class="col-sm-12">
				<div class="span7" id="">  
                     <div class="row-fluid">
					  <?php	
	                   $count_client=mysql_query("select * from admin");
	                   $count = mysql_num_rows($count_client);
                       ?>	
					   
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Подтверждение</h4>
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
							?>
							&nbsp;<input type="submit"  name="follow" value = "Больше не следить" class="btn btn-warning">
							<?php
							if(isset($_POST['follow'])){
							$id=$_POST['selector'];
							
							$N = count($id);
							for($i=0; $i < $N; $i++)
							{
								$result = mysql_query("DELETE FROM follow where tenant_id='$id[$i]' AND admin_id='$idadm'");
							}
							}
							?>
							<a button type='button' class="btn btn-primary" href="tenant_room.php">Назад</a>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
									<div class="table-responsive">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										<thead>
										  <tr>
												<th></th>
												<th><center>Ф.И.О.</center></th>
												<th><center>Уровень</center></th>
												<th><center>Знаний</center></th>
												<th><center>Адрес</center></th>
												<th><center>Телефон</center></th>
												<th><center>Исправить</center></th>
												<script src="../js/jquery.dataTables.min.js"></script>
                                                <script src="../js/DT_bootstrap.js"></script>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
				
					$user_query = mysql_query("select * from follow where admin_id='$idadm'")or die(mysql_error());
					while($row = mysql_fetch_array($user_query)){
					$er=$row['tenant_id'];
					$user_query1 = mysql_query("select * from tenant where tenant_id='$er'")or die(mysql_error());
					$row1 = mysql_fetch_array($user_query1);
					$idr = $row1['room_id'];
					$user_query2 = mysql_query("select * from room where room_id='$idr'")or die(mysql_error());
					$row2 = mysql_fetch_array($user_query2);
					$room_name = $row2['room_name'];
					$rent = $row2['rental'];
					$sum = $row1['water'] + $row1['waterr'] + $row1['waterrr'] + $row1['waterrrr'];
					$color = $row1['color'];
					if ($color == "")
					{
						$color = "black";
					}
					?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $er; ?>">
												</td>
												<td ><center><a href="user.php?id=<?php echo $row1['tenant_id']; ?>" style="color:<?php echo $color; ?>"><?php echo $row1['fname']."&nbsp;".$row1['mname']."&nbsp;".$row1['lname']?></a></center></td>
												<td><center><a href="view_levels.php?id=<?php echo $row1['level']; ?>" style="color:<?php echo $color; ?>"><?php echo $row1['level']; ?></center></td>
												<td><center><a href="water.php" style="color:<?php echo $color; ?>"><?php echo $sum; ?></center></td>
												<td style="color:<?php echo $row1['color']; ?>"><center><?php echo $row1['address']; ?></center></td>
												<td style="color:<?php echo $row1['color']; ?>"><center><?php echo $row1['contact']; ?></center></td>
											
												<td class="col-md-1">
												<center><a href="edit_tenant.php<?php echo '?id='.$row1['tenant_id']; ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
											</center>
											
							</tr>
												<?php } ?>
												
										</tbody>
									</table>
								</form>
							<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript">
  var sorter = new TINY.table.sorter("sorter");
	sorter.head = "head";
	sorter.asc = "asc";
	sorter.desc = "desc";
	sorter.even = "evenrow";
	sorter.odd = "oddrow";
	sorter.evensel = "evenselected";
	sorter.oddsel = "oddselected";
	sorter.paginate = true;
	sorter.currentid = "currentpage";
	sorter.limitid = "pagelimit";
	sorter.init("table",1);
  </script>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</nav>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
<?php include('script.php'); ?>
</body>
</html>