<?php
require_once('session.php');
?><?php
include "datab.php";
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

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <title>Главная страница</title>

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
			<nav>
			<head>
			<br>
			<br>
			<br>
     <div class="row-fluid">	
              <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <i class="icon-info-sign"></i>  <center><h4>Добро пожаловать в систему оценки знаний прибывающих в Летней Школе Электроники "МИФ"</h4></center>
						 <center><h4>Если вы заполните не все поля или заполните их не правильно, то ваш аккаунт могут вскоре удалить</h4></center>
                    </div>
               </div>
       </div>
            
      <div class="row">
       
				<?php
				$id=$_GET['id'];
				$ses=$_SESSION['tenant_id'];
				if ((!isset($_GET['id']))||($id==$ses)) {
				if(isset($_SESSION['login']))
				{ 
				$login=$_SESSION['login'];
				$pass=$_SESSION['pass'];
				$result = mysql_query("SELECT * FROM tenant WHERE login='$login' AND pass='$pass'"); 
				$myrow = mysql_fetch_array($result);
				$room_id=$myrow['room_id'];
				$result2 = mysql_query("SELECT * FROM room WHERE room_id='$room_id'"); 
				$myrow2 = mysql_fetch_array($result2);
				$room_name=$myrow2['room_name'];
				$rental=$myrow2['rental'];
				$lname=$myrow['lname'];
				$fname=$myrow['fname'];
				$mname=$myrow['mname'];
				$gender=$myrow['gender'];
				$age=$myrow['age'];
				$bdate=$myrow['bdate'];
				$address=$myrow['address'];
				$contact=$myrow['contact'];
				$level=$myrow['level'];
				$water=$myrow['water'];
				}
				?>
             <center><label> Уровень:&nbsp;<?php echo $level?></label></center>
			 <center><label> Знаний:&nbsp;<?php echo $water?></label></center>
			 <center><label> Отряд:&nbsp;<?php echo $room_name?></label></center>
			 <center><label> Вожатый:&nbsp;<?php echo $rental?></label></center>
			 <form class="form-horizontal" role="form" method="post">
			
			<br>
			<br>
			
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
				<?if (isset($_POST['update'])){
		if (($_POST['fname'] == '')or($_POST['lname'] == '')or($_POST['mname'] == '')
		or($_POST['gender'] == '')or($_POST['age'] == '')or($_POST['bdate'] == '')or($_POST['address'] == '')or($_POST['contact'] == ''))
			{?>
			<script>
	alert('Заполни все');
	</script>
			<?}
	else{ //dri namn is ang mga "name=tenant_id" nga ara sa mga input type.
		$r = addslashes("$_POST[room_id]");
		$f = addslashes("$_POST[fname]");
		$ln = addslashes("$_POST[lname]");
		$mn = addslashes("$_POST[mname]");
		$g = addslashes("$_POST[gender]");
		$e = addslashes("$_POST[age]");
		$b = addslashes("$_POST[bdate]");
		$a = addslashes("$_POST[address]");
		$c = addslashes("$_POST[contact]");
		mysql_query("UPDATE tenant SET room_id = '$r', fname = '$f', lname = '$ln', mname ='$mn', gender ='$g', age ='$e', bdate ='$b', address = '$a', contact = '$c' WHERE login='$login' AND pass='$pass'") or die(mysql_error()); 
	}
				}}
				else
				{
					$id =$_GET['id'];
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
		?>
		 <center><label> Уровень:&nbsp;<?php echo $level?></label></center>  <form class="form-horizontal" role="form" method="post">
			
			<br>
			<br>
			
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Фамилия:</label>
							  <div class="col-md-3">
					<input readonly type="text" name="fname" id = "fname" class="form-control input-md" placeholder="Фамилия" value="<?php echo $fname?>"> 
						</div>
						</div>
						
						<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Имя:</label>
							  <div class="col-md-3">
					<input readonly type="text" name="mname" id = "mname" class="form-control input-md"  placeholder="Имя" value="<?php echo $mname ?>"> 
					</div>
					</div>
					
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Отчество:</label>
							  <div class="col-md-3">
					<input readonly type="text" name="lname" id = "lname" class="form-control input-md" placeholder="Отчество" value="<?php echo $lname?>"> 
					</div>
					</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Возраст</label>
							  <div class="col-md-3">
						<input type="text" name="age" id = "age" readonly class="form-control input-md" title="input number only" placeholder="Возраст" value="<?php echo $age?>">
					</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Дата Рождения:</label>
							  <div class="col-md-3">
						<input type="date" name="bdate" id = "bdate" readonly title="click to choose a date" class="form-control input-md" placeholder="Дата Рождения" value="<?php echo $bdate?>">
					</div>
				</div>				
				</form>
		<?
				}?>
                  </div>
              </div>
			  <br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                   <center>&copy; MIPh Camp. All rights reserved<li>Creator: <a href="http://vk.com/dmitriievs">D. Evstigneev</a></li></center>
                </div>
            </div>

        </div>
    </div>
			
			</head></nav></div></div></div></div>
			 <div id="footser-end">
        
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	<?php include('script.php'); ?>
</body>

</html>
