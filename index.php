<?php
	require "php/db.php";
	require "style.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/index.min.css">
	<!-- название страницы -->
	<title>UFOMUS</title>
</head>
<body>
	<header class="oneDisplay">
		<div class="container">
			<div class="oneDisplay_wrapper">
				<div class="oneDisplay_inner">
					<div class="oneDisplay_menu">
						<!-- кнопка выплывающего меню -->
						<button class="oneDisplay_btn">меню</button>
						<!-- содержание закрытого меню -->
						<nav class="oneDisplay_nav hide">
							<ul>
								<li><a href="about.php" class="oneDisplay_btn">О ТЕАТРЕ</a></li>
								<li><a href="people.php" class="oneDisplay_btn">ЛЮДИ ТЕАТРА</a></li>
								<li><a href="gallery.php" class="oneDisplay_btn">ГАЛЕРЕЯ</a></li>
								<li><a href="tickets.php" class="oneDisplay_btn">БИЛЕТЫ</a></li>
								<li><a href="contact.php" class="oneDisplay_btn">КОНТАКТЫ</a></li>
							</ul>
						</nav>
						<button class="oneDisplay_btn" style="margin-left: 44px;" onclick="window.location.href='login.php'">профиль</button>

					</div>
					<!-- логотип компании -->
					<div class="oneDisplay_logo">
						<img src="icons/logoLight.svg" alt="logo">
					</div>
					<!-- номер телефона компании -->
					<div class="oneDisplay_number">
						<!-- иконка телефона -->
						<img src="icons/phone.png" alt="phone">
						<h3>+ 7 (945) 678 - 34 - 09</h3>
					</div>
				</div>
				<!-- заголовки первого блока -->
				<div class="oneDisplay_text">
					<h2>Театр для души</h2>
					<h1>ТЕАТР ТАЛАНТЛИВЫХ АКТЕРОВ</h1>
					<!-- кнопка перенаправления на страницу "Билеты" -->
					<button onclick="window.location.href='tickets.php'">КУПИТЬ БИЛЕТ</button>
				</div>
			</div>
		</div>
	</header>
	
	<section class="aboutTheatre">
		<div class="container">
			<div class="aboutTheatre_container">
				<div class="aboutTheatre_img">
					<!-- заголовок блока -->
					<h2>О ТЕАТРЕ</h2>
					<img src="img/index/2/1.png" alt="1">
				</div>
				<!-- контейнер с краткой информацией о театре -->
				<div class="aboutTheatre_text">
					<h2>ИСТОРИЯ ТЕАТРА</h2>
					<p>Театр Ufomus был открыт в 1944 году в Ленинграде. Постепенно театр стал приобретать известность в
						городе и популярность в среде интеллигенции. Первой
						работой в театре стал в 1974 году спектакль "Разбойник" по пьесе К. Чапека, который привлек...
					</p>
					<!-- кнопка перенаправления пользователя на страницу "О театре" -->
					<button class="aboutTheatre_btn" onclick="window.location.href='about.php'">Читать далее</button>
				</div>
			</div>
		</div>
	</section>
	<section class="perfomance">
		<div class="container">
			<!-- заголовок блока -->
			<h2 class="perfomance_title">ПРЕДСТОЯЩИЕ СПЕКТАКЛИ</h2>
			<div class="perfomance_container">
				<!-- Первый спектакль -->
				<div class="perfomance_containerOnce">
					<img src="img/index/3/1.png" alt="1">
					<div class="perfomance_text">
						<h2>На самом деле все иначе</h2>
						<img src="icons/arrowUp.png" alt="2">
					</div>
				</div>
				<!-- Второй спектакль -->
				<div class="perfomance_containerOnce">
					<img src="img/index/3/5.png" alt="3">
					<div class="perfomance_text">
						<h2>Госпожа Людмила</h2>
						<img src="icons/arrowUp.png" alt="4">
					</div>
				</div>
				<!-- Третий спектакль -->
				<div class="perfomance_containerOnce">
					<img src="img/index/3/2.png" alt="5">
					<div class="perfomance_text">
						<h2>Судьба</h2>
						<img src="icons/arrowUp.png" alt="6">
					</div>
				</div>
				<!-- Четвертый спектакль -->
				<div class="perfomance_containerOnce">
					<img src="img/index/3/6.png" alt="7">
					<div class="perfomance_text">
						<h2>Открой мне свою душу</h2>
						<!-- правильное указание адреса -->
						<img src="icons/arrowUp.png" alt="8">
					</div>
				</div>
				<!-- Пятый спектакль -->
				<div class="perfomance_containerOnce">
					<img src="img/index/3/3.png" alt="9">
					<div class="perfomance_text">
						<h2>Король Эдвард</h2>
						<!-- исправленный адрес -->
						<img src="icons/arrowUp.png" alt="10">
					</div>
				</div>
				<!-- Шестой спектакль -->
				<div class="perfomance_containerOnce">
					<img src="img/index/3/7.png" alt="11">
					<div class="perfomance_text">
						<h2>Друзья</h2>
						<img src="icons/arrowUp.png" alt="12">
					</div>
				</div>
				<!-- Седьмой спектакль -->
				<div class="perfomance_containerOnce">
					<img src="img/index/3/4.png" alt="13">
					<div class="perfomance_text">
						<h2>Кабаре цветы</h2>
						<img src="icons/arrowUp.png" alt="14">
					</div>
				</div>
				<!-- ВОсьмой спектакль -->
				<div class="perfomance_containerOnce">
					<img src="img/index/3/8.png" alt="15">
					<div class="perfomance_text">
						<h2>Пустошь или ворота в АД</h2>
						<img src="icons/arrowUp.png" alt="16">
					</div>
				</div>
			</div>
			<!-- Кнопка перенаправления на страницу "Билеты" -->
			<button class="aboutTheatre_btn" onclick="window.location.href='tickets.php'">Посмотреть билеты</button>
		</div>
	</section>
	<!-- Блок с информацией о миссии театра -->
	<section class="mission">
		<div class="container">
			<div class="mission_container">
				<h2>Миссия театра Ufomus направлена на сохранение культурных ценностей и развития деятельности в сфере
					культуры
					и образования в области культуры и искусства.</h2>
			</div>
		</div>
	</section>
	<section class="actor">
		<div class="container">
			<!-- Название блока -->
			<h2>АКТЕРЫ ТЕАТРА</h2>
			<div class="actor_container1">
				<!-- Первый актер -->
				<div class="actor_containerOnce">
					<img src="img/index/4/1.png" alt="1" class="first_photo">
					<h2>Самойлова Елизавета</h2>
					<h2 class="actor_containerOnce_textSecond">26 лет</h2>
				</div>
				<!-- Второй актер -->
				<div class="actor_containerOnce">
					<img src="img/index/4/2.png" alt="2">
					<h2>Мартынова Екатерина</h2>
					<h2 class="actor_containerOnce_textSecond">33 года</h2>
				</div>
				<!-- Третий актер -->
				<div class="actor_containerOnce">
					<img src="img/index/4/3.png" alt="3">
					<h2>Бахтеев Артем</h2>
					<h2 class="actor_containerOnce_textSecond">23 года</h2>
				</div>
				<!-- ЧЕтвертый актер -->
				<div class="actor_containerOnce">
					<img src="img/index/4/4.png" alt="4">
					<h2>Морозова Мария</h2>
					<h2 class="actor_containerOnce_textSecond">46 лет</h2>
				</div>
			</div>
			<!-- Нижний блок актеров -->
			<div class="actor_container2">
				<!-- Пятый актер -->
				<div class="actor_containerOnce">
					<img src="img/index/4/5.png" alt="5" class="first_photo">
					<h2>Петров Андрей</h2>
					<h2 class="actor_containerOnce_textSecond">34 года</h2>
				</div>
				<!-- Шестой актер -->
				<div class="actor_containerOnce">
					<img src="img/index/4/6.png" alt="6">
					<h2>Шмелев Павел</h2>
					<h2 class="actor_containerOnce_textSecond">28 лет</h2>
				</div>
			</div>
			<!-- Кнопка перенаправления на страницу "Люди театра" -->
			<button class="aboutTheatre_btn" onclick="window.location.href='people.php'">Посмотреть актеров</button>
		</div>
	</section>
	<!-- Блог со слайдером  -->
	<section class="slider_container">
		<!-- Название блока -->
		<h2 class="slider_title">ГАЛЕРЕЯ ТЕАТРА</h2>
		<div class="slider">
			<!-- Первое изображение -->
			<div class="slide">
				<a href="gallery.php"><img src="img/index/5/1.png" alt="1"></a>
				<h2>Братья и сестры</h2>
				<h2 class="last">Версия 2015</h2>
			</div>
			<!-- Второе изображение -->
			<div class="slide">
				<a href="gallery.php"><img src="img/index/5/2.png" alt="2"></a>
				<h2>Братья и сестры</h2>
				<h2 class="last">Версия 2015</h2>
			</div>
			<!-- Третье изображение -->
			<div class="slide">
				<a href="gallery.php"><img src="img/index/5/3.png" alt="3"></a>
				<h2>Братья и сестры</h2>
				<h2 class="last">Версия 2015</h2>	
			</div>
		</div>
	</section>
	<!-- Подвал сайта -->
	<footer>
		<div class="container">
			<div class="footer_container">
				<!-- Слоган -->
				<h2>ТЕАТР ТАЛАНТЛИВЫХ АКТЕРОВ</h2>
				<!-- Логотип театра -->
				<img src="icons/logoLight.svg" alt="logo">
				<!-- Адрес театра -->
				<div class="footer_addres">
					<h3>Санкт-Петергург</h3>
					<h3>ул. Рубинштейна, 18</h3>
				</div>
				<!-- Краткая контактная информация -->
				<div class="footer_number">
					<h3>+ 7 (945) 678 - 34 - 09</h3>
					<h3>hello@ufomusthestrelove.com</h3>
				</div>	
				<!-- Ссылки на страницы сайта -->
				<div class="footer_nav">
					<button onclick="window.location.href='about.php'">О ТЕАТРЕ</button>
					<button onclick="window.location.href='actor.php'">АКТЕРЫ</button>
					<button onclick="window.location.href='gallery.php'">ГАЛЕРЕЯ</button>
					<button onclick="window.location.href='tickets.php'">БИЛЕТЫ</button>
					<button class="footer_btn" onclick="window.location.href='contact.php'">КОНТАКТЫ</button>
				</div>
				<h3 class="footer_date">UFOMUS  Ⓒ2022</h3>
			</div>
		</div>
	</footer>
	<!-- Подключение всех файлов js для работы слайдера -->
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="slick/slick.min.js"></script> 
	<script src="js/script.js"></script>
	
</body>
</html>
