<?php
include "datab.php";
?>

  <!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Регистрация</title>
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
				<div class="span3"><div class="title_index"><div class="row-fluid"></div></div>
				
                    <div class="col-lg-4 col-md-5">
                        <div class="div-tran text-center">
                            <h3>Регистрация</h3>
                            <div class="col-lg-12 col-md-12 col-sm-12" > 
							
                                <form method="post" role="form">
                                       <div class="form-group">
						<select id="room_id" name="room_id" class="form-control" required>
								<?php 
							$query=mysql_query("select * from room");
						while($row=mysql_fetch_array($query))
						{ ?>
					<option value="<?php echo $row['room_id'];?>"> <?php echo $row['room_name'];?> </option>
				<?php } ?>
				</select>
			</div>
                                     <div class="form-group">
                                            <input type="text" name="fname" id="fname"class="form-control" placeholder="Фамилия" required autofocus/>
                                        </div>
										<div class="form-group">
                                            <input type="text" name="mname" id="mname"class="form-control" placeholder="Имя" required autofocus/>
                                        </div>
										<div class="form-group">
                                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Отчество" required autofocus/>
                                        </div>
										<div class="form-group">
										 <label class="col-md-5 control-label" for="rental">Пол:</label>
					<div class="input-group">
    			<div id="radioBtn" class="btn-group">
					<a class="btn btn-primary btn-sm notActive" data-toggle="gender" data-title="Мужской">Мужской</a>
    				<a class="btn btn-primary btn-sm notActive" data-toggle="gender" data-title="Женский">Женский</a>
    			</div>
    				<input type="hidden" name="gender" id="gender">
    			</div>
				</div>
				<div class="form-group">
							  
							 
						<input type="number" name="age" id = "age" class="form-control input-md" title="input number only" placeholder="Возраст" required/>
					
				</div>
				<div class="form-group">  
						<select id="level" name="level" class="form-control" required>	
					<option value="0"> 0 уровень </option>
					<option value="1"> 1 уровень </option>
					<option value="2"> 2 уровень </option>
					<option value="3"> 3 уровень </option>
				</select>			
			</div>
										<div class="form-group">
                                            <input type="text" name="login" id="login"class="form-control" placeholder="Придумай Логин" required autofocus/>
                                        </div>
                                      <div class="form-group">
                                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Придумай Пароль" required/>
											</div>
											<div class="form-group">
                                            <input type="text" name="unicode" id="unicode" class="form-control" placeholder="Уникальный код" required/>
											</div>
										<div class="row-md-5 col-md-offset-6 column">
                                     <button type="submit" id="submit" name="register" class="btn btn-success">ОК</button> 
									<a href="index.php" class="btn btn-primary">Назад</a>
									 </div>
                                        
										
                                    </form>
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
   
	<?php
	if (isset($_POST['register'])){
	$level=$_POST['level'];
	$room_id=$_POST['room_id'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$username=$_POST['login'];
	$password=$_POST['pass'];
	$unicode=$_POST['unicode'];
	$monthh = strtotime('now');
	$mon = date('Y-m-d',$monthh);
	$query = mysql_query("select * from tenant where login = '$username' and pass = '$password'")or die(mysql_error());
$count = mysql_num_rows($query);
$qu = mysql_query("select * from tenant where login = '$username' and pass = '$password'")or die(mysql_error());
$co = mysql_num_rows($qu);
if ($count > 0 && $co > 0){ ?>
<script>
alert('Уже есть такой');
</script>
<?php
}else{
	$quer = mysql_query("select * from unique_keys where key_value = '$unicode'")or die(mysql_error());
    $coun = mysql_num_rows($quer);
	if ($coun <= 0){ ?>
	<script>
	alert('Не существует такого уникального кода');
	</script>
	<?php
	}else{
	mysql_query("insert into tenant (level,room_id,gender,age,fname,mname,lname,login,pass,date_registered,unicode) values('$level','$room_id','$gender','$age','$fname','$mname','$lname','$username','$password','$mon','$unicode')")or die(mysql_error());
	mysql_query("DELETE FROM unique_keys where key_value = '$unicode'")or die(mysql_error());
	?>
	<script>
alert('успешно');
window.location = "index.php";
</script>
<?php }}}?>

		
				
				
			
				
		</div>
	
	
	</center>
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