<?php
include "datab.php";
?>
<?php
require_once('session1.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
.sortable {width:980px; border-left:1px solid #c6d5e1; border-top:1px solid #c6d5e1; border-bottom:none; margin:0 auto 15px}
.sortable th {background:url(images/header-bg.gif); text-align:left; color:#cfdce7; border:1px solid #fff; border-right:none}
.sortable th h3 {font-size:10px; padding:6px 8px 8px}
.sortable td {padding:4px 6px 6px; border-bottom:1px solid #c6d5e1; border-right:1px solid #c6d5e1}
.sortable .head h3 {background:url(images/sort.gif) 7px center no-repeat; cursor:pointer; padding-left:18px}
.sortable .desc, .sortable .asc {background:url(images/header-selected-bg.gif)}
.sortable .desc h3 {background:url(images/desc.gif) 7px center no-repeat; cursor:pointer; padding-left:18px}
.sortable .asc h3 {background:url(images/asc.gif) 7px  center no-repeat; cursor:pointer; padding-left:18px}
.sortable .head:hover, .sortable .desc:hover, .sortable .asc:hover {color:#fff}
.sortable .evenrow td {background:#fff}
.sortable .oddrow td {background:#ecf2f6}
.sortable td.evenselected {background:#ecf2f6}
.sortable td.oddselected {background:#dce6ee}

#controls {width:980px; margin:0 auto; height:20px}
#perpage {float:left; width:200px}
#perpage select {float:left; font-size:11px}
#perpage span {float:left; margin:2px 0 0 5px}
#navigation {float:left; width:580px; text-align:center}
#navigation img {cursor:pointer}
#text {float:left; width:200px; text-align:right; margin-top:2px}
</style>
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
			
			
<br>
<br>
<form class="form-horizontal" role="form" method="post">
				<table cellpadding="0" cellspacing="0" border="0" id="table" class="sortable" class="table">
				<thead>
				<tr class="head">
				<th><center>Отряд</th>
				<th><center>Фамилия</th>
				<th><center>Имя</th>
				<th><center>Отчество</th>
				<?php 
				$id = $_GET['id'];
						$query1=mysql_query("select * FROM zadachi where zada_id = '$id'")or die(mysql_error());
						while($zad=mysql_fetch_array($query1)){
							$level=$zad['level'];
							$kek=1;
							$kolvo=$zad['kolvo'];
						while($kek<=$zad['kolvo']) {
				?>
				<th><center><?php echo $kek; ?></th>
				<?php $kek=$kek+1; }?>
				<th><center><?php echo $zad['zadacha1']; ?></th>
				<?php }?>
				</tr>
				 <script>
				$(function() {
							
				 });
				 </script>
				</thead>
						<?php 
						$query=mysql_query("select * FROM tenant, room where tenant.room_id=room.room_id AND room.room_id=room.room_id AND tenant.level='$level' ")or die(mysql_error());
						$rows=mysql_num_rows($query);
						while($rec=mysql_fetch_array($query)){
							$sum=0;
						?>
						<tr class="edit_tr">
						<td><?php echo $rec['room_name']; ?></td>
						<td><?php echo $rec['fname'] ?></td>
						<td><?php echo $rec['mname'] ?></td>
						<td><?php echo $rec['lname'] ?></td>
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
								<td width="100"><input name='ocenka<?php echo $rec['tenant_id']; ?>' type='text' class="form-control input-md" placeholder="<?php echo $rec1['reshil'] ?>"></td>
								<?php $sum=$sum+$rec1['reshil'];
							}
							
							}if ($huh==0) 
								{
								?>
								<td width="100"><input name='ocenka<?php echo $rec['tenant_id']; ?>' type='text' class="form-control input-md"></td>
								<?php 
							}
							
							$kek=$kek+1;
						?>
						
						<?php }?>
						<td><?php echo $sum ?></td>
						<?php }?></tr>
							</table>
							<div class="control-group">
				<div class="controls" align="center">
						<button type="submit" id="submit" name="update" class="btn btn-success">Сохранить</button>
						</div></div>
							</form>
							<?
if (isset($_POST['update'])){
for($zad_id=1;$zad_id<=$kolvo;$zad_id++){
$query=mysql_query("select * FROM tenant, room where tenant.room_id=room.room_id AND room.room_id=room.room_id AND tenant.level='$level' ")or die(mysql_error());
while($rec=mysql_fetch_array($query)){
$i=$rec['tenant_id'];
$ocenka = $_POST['ocenka'.$i];
if(isset($ocenka)){
	$query2=mysql_query("select * FROM tenantzad where tenant_id='$i' AND zada_id = '$id' AND zad_id = '$zad_id'")or die(mysql_error());
	$rec1=mysql_num_rows($query2);
	$id = $_GET['id'];
	if ($rec1<=0)
	{
	mysql_query("INSERT INTO tenantzad(zad_id,zada_id,tenant_id,reshil) VALUES ('$zad_id','$id','$i','$ocenka')");
}
	else 
	{
	mysql_query("UPDATE tenantzad SET reshil='$ocenka' WHERE tenant_id='$i' AND zada_id = '$id' AND zad_id = '$zad_id'");	
	}
}}}?><script>
alert('Успешно');
window.location = "tenant_log.php?id=<?php echo $id;?>";
</script><?  }
?>
							<br>
							<br>
							<div id="controls">
		<div id="perpage">
			<select onchange="sorter.size(this.value)">
			<option value="5">5</option>
				<option value="10" selected="selected">10</option>
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
			</select>
			<span>Человек на странице</span>
		</div>
		<div id="navigation">
			<img src="images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
			<img src="images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
			<img src="images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
			<img src="images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
		</div>
		<div id="text">Страница <span id="currentpage"></span> из <span id="pagelimit"></span></div>
	</div>
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
							</form>
							</nav>
							</html>
							</div></div></div></div>
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	<?php include('script.php'); ?>
</body>

</html>