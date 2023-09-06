<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="homepage.php"><i class="fa fa-fw fa-home"></i>Главная страница</a>
                    </li>
					<? 
					$kek = $_SESSION['username'];
					$user = mysql_query("select * from admin where username='$kek'")or die(mysql_error());
				$ror = mysql_fetch_array($user);
				$kek = $ror['admin_id'];
					$use = mysql_query("select * from mess WHERE to_id='$kek' AND flag='1'")or die(mysql_error());
					$ro = mysql_num_rows($use);
					?>
					<li>
                        <a href="sendmain.php"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Сообщения <? if ($ro > 0 && $ro < 10) { ?><div class="example1"><img src="images/test.png" class="example_beauty"><span><?php echo $ro?></span></div><? } 
						if ($ro > 10) {?>
						<div class="example1"><img src="images/test.png" class="example_beauty"><hren>9</hren><hu>+</hu></div></a>
						<? } ?></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demon"><i class="fa fa-sitemap fa"></i>&nbsp;Отряды<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demon" class="collapse">
							<li>
                                <a href="processAdd_room.php"><i class="glyphicon glyphicon-plus"></i>&nbsp;Добавить отряд</a>
                            </li>
                            <li>
                                <a href="view_room.php"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;Просмотр отрядов</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-users fa-lg"></i>&nbsp;Пребывающие<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
							<li>
                                <a href="registerpage.php"><i class="glyphicon glyphicon-plus"></i>&nbsp;Внести в список пребывающего</a>
                            </li>
                            <li>
                                <a href="tenant_room.php"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;Просмотреть пребывающих</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="levels.php"><i class="fa fa-fw fa-bolt"></i>Уровни</a>
                    </li>
					<li>
                        <a href="water.php"><i class="glyphicon glyphicon-tint"></i>&nbsp;Знания пребывающих</a>
                    </li>
					<li>
                        <a href="miphs_levels.php" data-toggle="collapse" data-target="#demob"><i class="fa fa-fw fa-file-text"></i>&nbsp;Расписание МИФов</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demor"><i class="fa fa-fw fa-book"></i>&nbsp;Проекты<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demor" class="collapse">
							<li>
                                <a href="proect.php"><i class="glyphicon glyphicon-plus"></i>&nbsp;Добавить проект</a>
                            </li>
							<li>
                                <a href="projlevels.php"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;Просмотреть проекты</a>
                            </li>

                        </ul>
                    </li>
					<li>
					<a href="javascript:;" data-toggle="collapse" data-target="#log"><i class="fa fa-fw fa-graduation-cap"></i>&nbsp;Успеваемость по математике<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="log" class="collapse">
							<li>
                                <a href="add_title.php"><i class="glyphicon glyphicon-plus"></i>&nbsp;Добавить задачи</a>
                            </li>
							<li><a href="tenantlevels.php"><i class="fa fa-fw fa-file-word-o"></i>&nbsp;Успеваемость</a></li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="follow.php" data-toggle="collapse" data-target="#demob"><i class="fa fa-fw fa-star"></i>&nbsp;Отслеживаемые пребывающие</a>
                    </li>
                </ul>
            </div>