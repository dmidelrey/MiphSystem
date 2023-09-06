<?
session_start();
include "datab.php";
if (!empty($_SESSION['username']) and !empty($_SESSION['password']))
{
$login = $_SESSION['username'];
$password = $_SESSION['password'];
$result = mysql_query("SELECT * FROM admin WHERE username='$login' AND password='$password'"); 
$myrow = mysql_fetch_array($result);
header("Location: homepage.php");
}
if (!empty($_SESSION['login']) and !empty($_SESSION['pass']))
{
$login = $_SESSION['login'];
$password = $_SESSION['pass'];
$result = mysql_query("SELECT * FROM tenant WHERE login='$login' AND pass='$password'"); 
$myrow = mysql_fetch_array($result);
header("Location: userhomepage.php");
}
else
{?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Вход</title>
	<link rel="shortcut icon" href="assets/img/logocal.png">
    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--  Animation Style -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--  Pretty Photo Style -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background:url(assets/img/head1.JPG) no-repeat center center fixed;
		-webkit-background-size: cover !important;
		-moz-background-size: cover !important;
		-o-background-size: cover !important;
		background-size: cover !important;
	">
    <div id="pre-div">
        <div id="loader">
        </div>
    </div>
    <!--/. PRELOADER END -->
    
    <!--./ NAV BAR END -->
    <div id="home" >
        <div class="overlay">
            <div class="container">
				<div class="span3">
				<div class="title_index">
				<div class="row-fluid">
				</div></div>
                    <div class="col-lg-4 col-md-5">
                        <div class="div-trans text-center">
						
                            <h3>Пожалуйста войдите</h3>
							<br>
							<br>
                            <div class="col-lg-12 col-md-12 col-sm-12" >

                           <form action="login.php" class="form-signin" method="post" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control input-md" name="username" id="username" placeholder="Логин" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-md" name="password" id="password" placeholder="Пароль" required>
                                </div>
								<br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" id="login" name="login">Войти</button>
									<a href="register_form1.php" class="btn btn-primary btn-block">Регистрация</a>
									</p>
                                </div>
                             </div>

                        </div>
                    </div>
					
                </div>

				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="row-fluid">
				<div class="col-md-6 col-md-offset-1">
				<div class="span3"><img class="index_logo img-responsive" height="500" width="700" src="assets/img/logocalc.png"></div>
						
				</div></div>
				
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				
				<div class="row-fluid">
				<div class="col-md-5 col-md-offset-1">
				<h4><span id=tick2 style="color:#1aaf5d;">
				</span><span style="color:#1aaf5d;">&nbsp;| </span>
<script >
				function show2(){
				if (!document.all&&!document.getElementById)
				return
				thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
				var Digital=new Date()
				var hours=Digital.getHours()
				var minutes=Digital.getMinutes()
				var seconds=Digital.getSeconds()
				if (minutes<=9)
				minutes="0"+minutes
				if (seconds<=9)
				seconds="0"+seconds
				var ctime=hours+":"+minutes+":"+seconds
				thelement.innerHTML=ctime
				setTimeout("show2()",1000)
				}
				window.onload=show2
				//-->
</script>
	      <?php
            $date = new DateTime();?>
            <a style="color:#1aaf5d;"> <?php echo $date->format('d.m.y');?></a>
          </h4>
            </div>
            </div>
			
			</div>
			</div>
			
        </div>


    </div>
   <div id="footser-end">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                   <center>&copy; MIPh Camp. All rights reserved<li>Creator: <a href="http://vk.com/dmitriievs">D. Evstigneev</a></li></center>
                </div>
            </div>

        </div>
    </div>
    <!--./ FOOTER SECTION END -->
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
     <!--  WOW Script -->
    <script src="assets/js/wow.min.js"></script>
    <!--  Scrolling Script -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  PrettyPhoto Script -->
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
<?}?>