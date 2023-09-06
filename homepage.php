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
     <div class="row-fluid">	
              <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <i class="icon-info-sign"></i>  <center><h4>Добро пожаловать в систему оценки знаний прибывающих в Летней Школе Электроники "МИФ"</h4></center>
                    </div>
               </div>
       </div>
            
      <div class="row">
       
				<?php
				setlocale(LC_ALL, 'ru_RU.UTF-8');
				
				$mon = strftime('%Y',time());
				?>
              <div id="g-site1" class="col-xs-12">
                  <div class="demo-container">
					<strong><h3><center>Статистика за МИФ <?php echo "$mon"?></center></h3></strong>
						<div id="block_bg" class="block">	
                            <div class="navbar navbar-inner block-header">
                            <div class="block-content collapse in">
                                <div class="span12">
								<form class="form-horizontal" role="form" method="post">
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								<br>
								<br>
					<?php
						$ll = date("Y",strtotime("next year"));
						$nwww = date("Y-m-d",strtotime("Now"));
						$nww = date("Y",strtotime("Now"));
						$jan = date("m-d",strtotime("January 1"));
						$dec = date("m-d",strtotime("December 31"));	
					
					if(($nwww >= "$nww-$jan") && ($nwww < "$nww-$dec")){
					$janss = "$nww-$jan";
					$febss = "$nww-$dec";
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$qryt = mysql_query("SELECT * FROM room")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					$qr = mysql_query("SELECT fname, mname, water, waterr, waterrr, waterrrr FROM tenant ORDER BY water DESC, waterr DESC, waterrr DESC, waterrrr DESC LIMIT 1")or die(mysql_error());
					$co = mysql_fetch_array($qr);
					$sum = $co[water] + $co[waterr] + $co[waterrr] + $co[waterrrr];
					echo"<tr><td class='danger' height='50'><strong><h4>Всего пребывающих: $counts человек</h4></strong></td><td class='info' height='50'><strong><h4>Всего отрядов: $countt отрядов</h4></strong></td></tr>
					<tr><td class='info' height='50'><strong><h4>Лидер по знаниям: $co[fname] $co[mname] ($sum зн.)</h4></strong></td><td class='danger' height='50'><strong><h4>Лидер по математике: $co[fname] $co[mname] ($co[water] зн.)</h4></strong></td></tr>";
					}
					?>
					</table>
					
					<br>
					<br>
					<br>
					
					</form>
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
			<div class="container-fluid">
			
					  <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                   <center>&copy; MIPh Camp. All rights reserved<li>Creator: <a href="http://vk.com/dmitriievs">D. Evstigneev</a></li></center>
                </div>
            </div>

        </div>
                  </div>
              

			
			</head></nav></div></div></div></div>
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	<?php include('script.php'); ?>
</body>

</html>
