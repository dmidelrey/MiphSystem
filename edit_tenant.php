<?php
include "datab.php";
?>
<?php
require_once('session1.php');
?>
<?php
$id = $_GET['id'];
	$select = "SELECT * FROM 
			tenant as t,
			 room as r 
			 WHERE
			 t.tenant_id = $id AND 
			 r.room_id = t.room_id
			 ";
			 $result = mysql_fetch_array(mysql_query($select));
	$qry=mysql_query($select);
		if($qry)
		{
		while($rec = mysql_fetch_array($qry)){
		$room_name = "$rec[room_name]";
		$level = "$rec[level]";
		$fname = "$rec[fname]";
		$mname = "$rec[mname]";
		$lname = "$rec[lname]";
		$nname = "$rec[nname]";
		$gender = "$rec[gender]";
		$age = "$rec[age]";
		$dis_id = "$rec[dis_id]";
		$bdate = "$rec[bdate]";
		$address = "$rec[address]";
		$contact = "$rec[contact]";
		}
		}
		//diri na mah submit ang data. lantawun nia kung mai onud ang every txtbox
	if (isset($_POST['update'])){
		if (($_POST['level'] == '')or($_POST['room_id'] == '')or($_POST['fname'] == '')or($_POST['lname'] == '')or($_POST['mname'] == '')
		or($_POST['gender'] == '')or($_POST['age'] == '')or($_POST['bdate'] == '')or($_POST['address'] == '')or($_POST['contact'] == ''))
			{
			echo "Заполни все";
			}
	else{ //dri namn is ang mga "name=tenant_id" nga ara sa mga input type.
		$hu = addslashes("$_POST[level]");
		$r = addslashes("$_POST[room_id]");
		$f = addslashes("$_POST[fname]");
		$ln = addslashes("$_POST[lname]");
		$mn = addslashes("$_POST[mname]");
		$n = addslashes("$_POST[nname]");
		$g = addslashes("$_POST[gender]");
		$e = addslashes("$_POST[age]");
		$d = addslashes("$_POST[dis_id]");
		$b = addslashes("$_POST[bdate]");
		$a = addslashes("$_POST[address]");
		$c = addslashes("$_POST[contact]");
		//dri nah mah edit xng data
		mysql_query("UPDATE tenant SET level = '$hu', room_id ='$r', fname ='$f',
		lname ='$ln',mname ='$mn', gender ='$g', age ='$e', dis_id ='$d', bdate ='$b', address = '$a', contact = '$c' WHERE tenant_id = '$id'")or die(mysql_error()); 
	}?>
	<?php
	$id = $_GET['id'];
		$user_query = mysql_query("select * from tenant, room where tenant.room_id=room.room_id AND tenant.tenant_id=$id")or die(mysql_error());
		while($row = mysql_fetch_array($user_query)){
		$id1 = $row['room_id'];
		}?>
				<script>
alert('Успешно');
window.location = "view_tenant.php?id=<?php echo $id1;?>";
</script>
<?php
}?>
<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="js/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="js/plugins/bootstrap.js"></script>

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
    <title>Изменить</title>

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

                <!-- Page Heading -->

		<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" role="form" method="post">
			
			<br>
			<br>
			<div class="form-group">
							<label class="col-md-5 control-label" for="room">Отряд:</label>  
							  <div class="col-md-3">
								<select id="room_id" name="room_id" class="form-control" value="<?php echo $room_name?>" />  
									<option></option>
								<?php 
						$query=mysql_query("select * from room");
						while($row=mysql_fetch_array($query))
						 { 
						 	if($result['room_id'] == $row['room_id']){
						 		$sel = "selected";
						 	}else{
						 		$sel = "";
						 	}
						 		?>
							<option value="<?php echo $row['room_id'];?>" <?=$sel?> > <?php echo $row['room_name'];?> </option>
							<?php 
						} ?>
								</select>
				</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Фамилия:</label>
							  <div class="col-md-3">
					<input type="text" name="fname" id = "fname" class="form-control input-md" placeholder="Фамилия" value="<?php echo $fname?>"> 
						</div>
						</div>
						
						<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Имя:</label>
							  <div class="col-md-3">
					<input type="text" name="mname" id = "mname" class="form-control input-md"  placeholder="Имя" value="<?php echo $mname?>"> 
					</div>
					</div>
					
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Отчество:</label>
							  <div class="col-md-3">
					<input type="text" name="lname" id = "lname" class="form-control input-md" placeholder="Отчество" value="<?php echo $lname?>"> 
					</div>
					</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Пол:</label>
							  <div class="col-md-3">
								<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" data-toggle="gender" data-title="Мужской">Мужской</a>
    					<a class="btn btn-primary btn-sm notActive" data-toggle="gender" data-title="Женский">Женский</a>
    				</div>
    				<input type="hidden" name="gender" id="gender" value="<?php echo $gender?>">
    			</div>
						</div>
						</div>
						<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Уровень:</label>
							  <div class="col-md-3">
								<div class="input-group">
    				<div id="radioBtn" class="btn-group">
    					<a class="btn btn-primary btn-sm notActive" data-toggle="level" data-title="0">Уровень 0</a>
    					<a class="btn btn-primary btn-sm notActive" data-toggle="level" data-title="1">Уровень 1</a>
						<a class="btn btn-primary btn-sm notActive" data-toggle="level" data-title="2">Уровень 2</a>
						<a class="btn btn-primary btn-sm notActive" data-toggle="level" data-title="3">Уровень 3</a>
    				</div>
    				<input type="hidden" name="level" id="level" value="<?php echo $level?>">
    			</div>
						</div>
						</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Возраст</label>
							  <div class="col-md-3">
						<input type="text" name="age" id = "age" class="form-control input-md" title="input number only" placeholder="Возраст" value="<?php echo $age?>">
					</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Дата Рождения:</label>
							  <div class="col-md-3">
						<input type="date" name="bdate" id = "bdate" title="click to choose a date" class="form-control input-md" placeholder="Дата Рождения" value="<?php echo $bdate?>">
					</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Адрес:</label>
							  <div class="col-md-3">
						<input type="text" name="address" id = "address" class="form-control input-md" placeholder="Адрес" value="<?php echo $address?>">
					</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Телефон:</label>
							  <div class="col-md-3">
						<input type="text" name="contact" id = "contact" class="form-control input-md" title="input number only" placeholder="Телефон" value="<?php echo $contact?>">
					</div>
				</div>
				<div class="control-group">
				<div class="controls" align="center">
				<button type="submit" id="submit" name="update" class="btn btn-success">Обновить</button>
				</div>
				
				</div>
				</form>
				</div>
				</div>
</div>
  </div>
</div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	</body>

</html>
