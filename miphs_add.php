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
    <title>Добавление МИФа</title>

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
           

<!--//////////////////////////////// Add Dialog ///////////////////////////////////////////-->

<br><br>
 <div class="container-fluid">

                    <div class="panel panel-primary">
                        <div class="panel-heading"><i class="fa fa-sitemap fa"></i>&nbsp;Добавить МИФ</div>
                        <div class="panel-body">
                            <div class="table">
								<form method="post">
                                    <tbody>
                                        <tr>
										<center>
										<div class="form-group input-group">
									  <label class="col-sm-2 control-label">Уровень</label>
									  <select type="text" class="form-control" id="level" name="level" placeholder="Название" required>
									  <option value="0"> 0 уровень </option>
									  <option value="1"> 1 уровень </option>
									  <option value="2"> 2 уровень </option>
									  <option value="3"> 3 уровень </option>
									  </select>
									  </div>
									  <div class="form-group input-group">
							  <label class="col-sm-2 control-label" for="rental">Дата</label>
						<input type="date" name="date" id = "date" title="Выбери дату" class="form-control" placeholder="Дата"required>
				</div>
                                      <div class="form-group input-group">
									  <label class="col-sm-2 control-label">Предмет</label>
									  <select type="text" class="form-control" id="title" name="title" placeholder="Название" required>
									  <option value="Математика"> Математика </option>
									  <option value="Информатика"> Информатика </option>
									  <option value="Физика"> Физика </option>
									  <option value="Практика"> Практика </option>
									  </select>
									  </div>
									  	<div class="form-group input-group">
										<label class="col-sm-2 control-label">Порядок</label>
										<input type="text" class="form-control" id="nomber" name="nomber" placeholder="Какой по порядку?"required>
									   </div>
									   
				
									   
                               
										    <div class="col-md-11">
						           				 <button name="save" class="btn btn-success">Сохранить</button>
						           			 </div>
											 <?php				
if (isset($_POST['save'])){
$level=$_POST['level'];
$date=$_POST['date'];
$title=$_POST['title'];
$nomber=$_POST['nomber'];
$query = mysql_query("select * from miphs where level = '$level' AND date = '$date' AND nomber = '$nomber' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('На этот день в это время уже существует МИФ. Удалите его или измените.');
</script>
<?php
}else{
mysql_query("insert into miphs (level,date,title,nomber) values('$level','$date','$title','$nomber')")or die(mysql_error());

?>
<script>
alert('Успешно сохранен!');
window.location = "miphs.php?id=<? echo $level;?>";
</script>
<?php
}
}
?>
                                   
									</tr>
									</tbody>
						            </div>
									</center>
                                 </form>      
                                    
                            </div>                          
                        </div>                     
                    </div>                   
                </div>
			</div>
		</div>	
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