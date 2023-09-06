<?php
include "datab.php";
?>
<?php
require_once('session1.php');
?>

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
    <title>Регистрация прибывающего</title>

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
		<nav>
		<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" role="form" method="post">
			<h3><center>Информация для регистрации</center></h3>
			<br>
			<div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="room">Отряд:</label>  
							  <div class="col-md-3">
						<select id="room_id" name="room_id" class="form-control" required>
							
								<?php 
							$query=mysql_query("select * from room");
						while($row=mysql_fetch_array($query))
						{ ?>
					<option value="<?php echo $row['room_id'];?>"> <?php echo $row['room_name'];?> </option>
				<?php } ?>
				</select>			
			</div>
			</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="room">Уровень:</label>  
							  <div class="col-md-3">
						<select id="level" name="level" class="form-control" required>
					<option value="0"> 0 уровень </option>
					<option value="1"> 1 уровень </option>
					<option value="2"> 2 уровень </option>
					<option value="3"> 3 уровень </option>
				</select>			
			</div>
			</div>
				<div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Логин:</label>
							  <div class="col-md-3">
					<input type="text" name="login" id = "login" class="form-control input-md" placeholder="Логин" required/> 
						</div>
						</div>
						<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Пароль:</label>
							  <div class="col-md-3">
					<input type="password" name="pass" id = "pass" class="form-control input-md" placeholder="Пароль" required/> 
						</div>
						</div>
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Фамилия:</label>
							  <div class="col-md-3">
					<input type="text" name="fname" id = "fname" class="form-control input-md" placeholder="Фамилия" required/> 
						</div>
						</div>
						
						<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Имя:</label>
							  <div class="col-md-3">
					<input type="text" name="mname" id = "mname" class="form-control input-md"  placeholder="Имя" required/> 
					</div>
					</div>
					
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Отчество</label>
							  <div class="col-md-3">
					<input type="text" name="lname" id = "lname" class="form-control input-md" placeholder="Отчество" required/> 
					</div>
					</div>
				<div>
					<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Пол:</label>
							  <div class="col-md-3">
					<div class="input-group">
    			<div id="radioBtn" class="btn-group">
					<a class="btn btn-primary btn-sm notActive" data-toggle="gender" data-title="Мужской">Мужской</a>
    				<a class="btn btn-primary btn-sm notActive" data-toggle="gender" data-title="Женский">Женский</a>
    			</div>
    				<input type="hidden" name="gender" id="gender">
    			</div>
				</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Возраст:</label>
							  <div class="col-md-3">
						<input type="number" name="age" id = "age" class="form-control input-md" title="input number only" placeholder="Возраст" required/>
					</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Дата рождения:</label>
							  <div class="col-md-3">
						<input type="date" name="bdate" id = "bdate" title="click to choose a date" class="form-control input-md" placeholder="1900-1-31" required/>
					</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Адрес:</label>
							  <div class="col-md-3">
						<input type="text" name="address" id = "address" class="form-control input-md" placeholder="Адрес" required/>
					</div>
				</div>
				<div class="form-group">
							  <label class="col-md-5 control-label" for="rental">Телефон:</label>
							  <div class="col-md-3">
						<input type="text" name="contact" id = "contact" class="form-control input-md" title="input number only" placeholder="Телефон" required/>
					</div>
				</div>
				<div class="control-group">
				<div class="controls" align="center">
				<button type="submit" id="submit" name="register" class="btn btn-success">Сохранить</button>
				<br>
				<br>
				<br>
				<br>
				<br>
				</div>

				</div>

				</div>
				</form>
				</div>
				</div>
				</nav>
				</div>
				
</div>
			

<?php
	if (isset($_POST['register'])){
	$level=$_POST['level'];
	$room_id=$_POST['room_id'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$bdate=$_POST['bdate'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$login=$_POST['login'];
	$pass=$_POST['pass'];
	$monthh = strtotime('now');
	$mon = date('Y-m-d',$monthh);
	$length = 8; $chars = 'ABCDEFGHJKLMNOPQRSTUVWXYZ1234567890';
    $chars_length = (strlen($chars) - 1);
    $string = $chars{rand(0, $chars_length)};
    for ($i = 1; $i < $length; $i = strlen($string))  {
        $r = $chars{rand(0, $chars_length)};
        if ($r != $string{$i - 1}) $string .=  $r;
	} $string = "MIPH_" . $string;
	mysql_query("insert into tenant (login,pass,room_id,fname,mname,lname,gender,age,bdate,address,contact,date_registered,dis_id,unicode,level) values('$login','$pass','$room_id','$fname','$mname','$lname','$gender','$age','$bdate','$address','$contact','$mon','$dis_id','$string','$level')")or die(mysql_error());
				?>
				<?php 
						
						$query=mysql_query("SELECT * FROM tenant")or die(mysql_error());
						while($rec=mysql_fetch_array($query)){
						$id = $rec['room_id'];
						}?>
				<script>
alert('Логин: <?php echo $login;?> и уникальный код: <?php echo $string;?>');
window.location = "view_tenant.php?id=<?php echo $id;?>";
</script>
<?php
}?>

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
