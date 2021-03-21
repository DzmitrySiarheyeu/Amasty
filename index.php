<!DOCTYPE html>
<html lang="ru-Ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="Sergeev Dmitry" />
        <title>Amasty (test tasks)</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="res/img/cropped-black_minimal-logo_jpeg-270x270.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style.css" rel="stylesheet" />
    </head>
		
	<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger">Amasty test tasks</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#task1">Task 1</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#task2">Task 2</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#task3">Task 3</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#task4">Task 4</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#task5">Task 5</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		
		<section class="page-section bg-primary" id="task1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="text text-white mt-0" title="Создать интерфейс IChessmen, который содержит методы move, getPosition. Создать абстрактный класс AbstractChessmen, который наследует интерфейс IChessmen, имеет свойство $x,$y, реализует функцию getPosition.  Создать класс King, который наследует AbstractChessmen и реализует метод Move. Реализация метода Move должна бросать исключение, если фигуру перемещают на недопустимую область(смотрите рис. 1) . Так же нельзя переместить фигуру за край шахматной доски. Функция Move должна быть единственной возможностью изменить положение фигуры. Создать класс Queen, который наследует AbstractChessmen и реализует метод Move. Реализация метода Move должна бросать исключение, если фигуру перемещают на недопустимую область(смотрите рис. 2) . Так же нельзя переместить фигуру за край шахматной доски. Функция Move должна быть единственной возможностью изменить положение фигуры. Создать две фигуры Queen на х=1 y=1, King на x=4,y=3. Переместите фигуру Queen на х=7 y=3, а King на x=2,y=2. Выведите на экран позицию этих двух фигур.">Task 1</h1>
						 <hr class="divider light my-4" />
						<form name="task1" method="post">
							
							
							<table border='1' id="chessBoard">
									<?php 
								
								
								include_once 'php/Task1/IChessmen.php';
									include_once 'php/Task1/AbstractChessmen.php';
									include_once 'php/Task1/King.php';
									include_once 'php/Task1/Queen.php';
								
								
									$x_king = 4;
									$y_king = 3;
									$x_queen = 1;
									$y_queen = 1;
									
									$king = new King($x_king, $y_king);
									$queen = new Queen($x_queen,$y_queen);

									echo '<p>King start position: </p>';
									$king->getPosition();
									echo '<p>Queen start position: </p>';
									$queen->getPosition();
									echo '<br>';
									$king->move(3,3)->move(2,2)->getPosition();
									$queen->move(3,3)->move(7,3)->getPosition();
								?>
							</table>					
						</form>
						
                    </div>
                </div>
            </div>
        </section>
		
		<section class="page-section bg-primary2" id="task2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="text text-red mt-0" title="Реализовать Тест Струпа 1) на экран вывести сообщение 5 строк по 5 слов в каждом 2) цвета|слова - red, blue, green, yellow, lime, magenta, black, gold, gray, tomato 3) цвет и слово не должны совпадать (например слово lime может быть окрашено в любой из цветов кроме lime), выбор цвета - случайный">Task 2</h1>
                        <hr class="divider light my-4" />
						<form name="task2" method="post">
							<?php
								if(isset($_POST['btn_stroop'])){
									require_once "php/task2/stroop.php";
									$items = ["red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato"];
									$test = new Stroop($items);
									$str = $test->getTest();
								}
							?>
						
							<button name="btn_stroop">Cгенерировать</button>
						</form>
						
                    </div>
                </div>
            </div>
        </section>
		
		<section class="page-section bg-primary" id="task3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="text text-white mt-0" title="Создать форму, для решение задачи о банкомате: 1) Форма состоит из двух полей: “Номинал в наличии” и “Ваша сумма” - При нажатие на кнопку “Отправить” должен совершаться AJAX запрос, который передает данные из этих двух(!) полей на PHP-Скрипт, который будет высчитывать результат. 2) Логика работы проста: Выдать наименьшее количество купюр для удовлетворения запроса клиента. Количество каждого номинала бесконечное. 3) Результат вывести на экран в виде таблицы “Купюра”, “Количество” (см. рисунок 3). 4) Eсли указанную сумму выдать нельзя то вывести 2 ближайших суммы (см. Рисунок 4). 5) Допускается использование любых JS библиотек.">Task 3</h1>
                         <hr class="divider light my-4" />
						
						<form action="" method="POST">
							<p>Номинал в наличии</p>
							<input type="text" name="bills" placeholder="5, 10, 20, 50, 100, 200, 500">
							<br>
							<p>Ваша сумма</p>
							<input type="text" name="sum" placeholder="1075">
							<br>
							<br>
							
						</form>
						<button class="btn">Отправить</button>
						<div class="clear"></div>
						<div class="response">
							<p>Результат</p>
							<div class="result">
								<table class="response_table"></table>
							</div>
						</div>
						
                    </div>
                </div>
            </div>
        </section>
		
		<section class="page-section bg-primary4" id="task4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="text text-white mt-0" title="Используя https://simplehtmldom.sourceforge.io/ сделать скрипт, который достаёт из Архива результатов Серии А все места заданной команды по сезонам (Например Удинезе) https://terrikon.com/football/italy/championship/ Передача имени команды осуществляется через POST-форму">Task 4</h1>
                         <hr class="divider light my-4" />
						<form name="task4" action="php/Task4/Task4.php" method="post">

						<p>Football club:</p>
							<input type="text" name="club">
							<input type="submit" name="submit" value="GO!"/>
						</form>					
                    </div>
                </div>
            </div>
        </section>
		
		<section class="page-section bg-primary" id="task5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1 class="text text-white mt-0" title="Выполнить запросы к данной БД. Исходные данные: изначально у всех людей из таблицы persons было по 100 рублей. Передача денег из таблицы transactions отражает кто (from) кому(to) сколько денег передал. а) Прислать дамп структуры вашей созданной базы данных. б) написать запрос, который бы выводил полное имя и баланс человека на данный момент в) написать запрос, который бы выводил имя человека, который участвовал в передаче денег наибольшее количество раз г) написать запрос, отражающий все транзакции, где передача денег осуществлялась между представителями одного города">Task 5</h1>
                         <hr class="divider light my-4" />
						
						
						<?php

								$host = "localhost";
								$db_name = "testbase";
								$username = "root";
								$password = "";

								$connection = null;

								try {
									$connection = new PDO("mysql:host=".$host.";dbname=".$db_name, $username, $password);
									$connection->exec("set names utf8");
								} catch(PDOException $exception) {
									echo "Connection errors: ".$exception->getMessage();
								}

								echo '<h2>I</h2>';
								echo '<table class="tab"><tr><td>Fullname</td><td>Balance</td></tr>';
								foreach($connection->query('SELECT p.fullname, (100 - IFNULL(SUM(t1.amount), 0) + IFNULL(t3.plus, 0)) as balance FROM `persons` p LEFT JOIN transactions t1 ON p.id = t1.from_person_id LEFT JOIN (SELECT t2.to_person_id, SUM(t2.amount) as plus FROM persons p LEFT JOIN transactions t2 ON p.id = t2.to_person_id GROUP BY p.id) t3 ON p.id = t3.to_person_id GROUP BY p.id, t3.plus ', PDO::FETCH_ASSOC) as $row) {
									echo '<tr>';
									echo '<td>'. $row['fullname'] .'</td>';
									echo '<td>' . $row['balance'] . '</td>';
									echo '</tr>';
								}
								echo '</table>';


								echo '<h2>II</h2>';
								
								foreach($connection->query('SELECT result.fullname, result.transactionsSum as trCnt FROM
								(SELECT p.id, p.fullname, t1.cnt1, t2.cnt2, (IFNULL(t1.cnt1, 0) + IFNULL(t2.cnt2, 0)) as transactionsSum FROM persons p
								 LEFT JOIN (SELECT t.from_person_id, COUNT(from_person_id) as cnt1 FROM transactions t GROUP BY t.from_person_id) t1 ON p.id = t1.from_person_id
								 LEFT JOIN (SELECT t.to_person_id, COUNT(to_person_id) as cnt2 FROM transactions t GROUP BY t.to_person_id) t2 ON p.id = t2.to_person_id) result
								 ORDER BY trCnt DESC
								 LIMIT 1', PDO::FETCH_ASSOC) as $row) {
									echo '<pre class="pre">';
									echo $row['fullname'] . ' - Total transactions:' . $row["trCnt"];
									echo '</pre>';
								}

								echo '<h2>III</h2>';
								
								foreach ($connection->query('SELECT t.id as trId, t1.fullname as name1, t1.name as city1 , t2.fullname as name2, t2.name as city2 FROM transactions t
								JOIN 
								(SELECT p.id, p.fullname, c.name FROM persons p JOIN cities c ON p.city_id = c.id ) t1 ON t.from_person_id = t1.id
								JOIN 
								(SELECT p.id, p.fullname, c.name FROM persons p JOIN cities c ON p.city_id = c.id ) t2 ON 		t.to_person_id = t2.id
								WHERE t1.name = t2.name ', PDO::FETCH_ASSOC) as $row) {
									echo '<pre class="pre">';
									echo $row['trId'] . ' - ' . $row["name1"]. ' - ' . $row["city1"] . '; ' . $row["name2"]. ' - ' . $row["city2"];
									echo '</pre>';
								}
						?>
						
                    </div>
                </div>
            </div>
        </section>
		
		
		
		
		
		
		
		
		
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
		<script src="js/ATM.js"></script>
		
	</body>
	
	
</html>