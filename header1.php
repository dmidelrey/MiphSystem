            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="userhomepage.php"><i class="fa fa-fw fa-home"></i>Моя страница</a>
                    </li>
					<? 
					$kek = $_SESSION['login'];
					$user = mysql_query("select * from tenant where login='$kek'")or die(mysql_error());
				$ror = mysql_fetch_array($user);
				$kek = $ror['tenant_id'];
					$use = mysql_query("select * from mess WHERE to_id='$kek' AND flag='1'")or die(mysql_error());
					$ro = mysql_num_rows($use);
					?>
					<li>
                        <a href="usersendmain.php"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Сообщения <? if ($ro > 0 && $ro < 10) { ?><div class="example1"><img src="images/test.png" class="example_beauty"><span><?php echo $ro?></span></div><? } 
						if ($ro > 10) {?>
						<div class="example1"><img src="images/test.png" class="example_beauty"><hren>9</hren><hu>+</hu></div></a>
						<? } ?></a>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demon"><i class="fa fa-sitemap fa"></i>&nbsp;Отряды<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demon" class="collapse">
                            <li>
                                <a href="user_room.php"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;Просмотр отрядов</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="userlevels.php"><i class="fa fa-fw fa-bolt"></i>Уровни</a>
                    </li>
					<li>
                        <a href="usermiphs.php"><i class="fa fa-fw fa-file-text"></i>&nbsp;Расписание МИФов</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demor"><i class="fa fa-fw fa-book"></i>&nbsp;Проекты<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demor" class="collapse">
							<li>
                                <a href="userproect.php"><i class="glyphicon glyphicon-plus"></i>&nbsp;Добавить проект</a>
                            </li>
							<li>
                                <a href="usermyproect.php"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;Мои проекты</a>
                            </li>
							<li>
                                <a href="userproject.php"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;Просмотреть проекты</a>
                            </li>

                        </ul>
                    </li>
					<li>
					<a href="javascript:;" data-toggle="collapse" data-target="#log"><i class="fa fa-fw fa-graduation-cap"></i>&nbsp;Успеваемость по математике<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="log" class="collapse">
							<li><a href="usertenantlevels.php"><i class="fa fa-fw fa-file-word-o"></i>&nbsp;Моя успеваемость</a></li>
                 
							<li><a href="userzadachi.php"><i class="fa fa-fw fa-file-word-o"></i>&nbsp;Задачи</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>