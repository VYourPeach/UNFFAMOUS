<?php
    require "style.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/gallery.min.css">
	<title>UFOMUS</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="oneDisplay_wrapper">
				<div class="oneDisplay_inner">
					<div class="oneDisplay_menu">
						<button class="oneDisplay_btn">меню</button>
						
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
					<div class="oneDisplay_logo">
						<a href="index.php"><img src="icons/Logo.svg" alt="logo"></a>
					</div>
					<div class="oneDisplay_number">
						<img src="icons/phonedark.svg" alt="phone">
						<h3>+ 7 (945) 678 - 34 - 09</h3>
					</div>
				</div>
		<div class="oneDisplay_title_text">
        <h1>ГАЛЕРЕЯ</h1>
		</div>
	</header>
	<section class="perfomance">
		<div class="container">
			<div class="perfomance_container">
				
				<div class="perfomance_containerOnce">
					<img src="img/gallery/17.png" alt="1">
					<div class="perfomance_text">
						<h2>На самом деле все иначе</h2>
					</div>
				</div>
				<div class="perfomance_containerOnce">
					<img src="img/gallery/2.png" alt="2">
					<div class="perfomance_text">
						<h2>«Братья и сестры» 2015</h2>
					</div>
				</div>
				<div class="perfomance_containerOnce">
					<img src="img/gallery/1.png" alt="3">
					<div class="perfomance_text">
						<h2>Русалочка</h2>
					</div>
				</div>
				<div class="perfomance_containerOnce">
					<img src="img/gallery/5.png" alt="4">
					<div class="perfomance_text">
						<h2>«Бесплодные усилия любви»</h2>
					</div>
				</div>
				<div class="perfomance_containerOnce">
					<img src="img/gallery/13.png" alt="5">
					<div class="perfomance_text">
						<h2>«Синий свет» 2019 год</h2>
					</div>
				</div>
				<div class="perfomance_containerOnce">
					<img src="img/gallery/8.png" alt="6">
					<div class="perfomance_text">
						<h2>Открой мне свою душу</h2>
					</div>
				</div>
				<div class="perfomance_containerOnce">
					<img src="img/gallery/12.png" alt="7">
					<div class="perfomance_text">
						<h2>«Бесплодные усилия любви»</h2>
					</div>
				</div>
				<div class="perfomance_containerOnce">
					<img src="img/gallery/11.png" alt="8">
					<div class="perfomance_text">
						<h2>Парчовый барабан</h2>
					</div>
				</div>
                <div class="perfomance_containerOnce">
					<img src="img/gallery/6.png" alt="9">
					<div class="perfomance_text">
						<h2>Страх любовь отчаяние</h2>
					</div>
				</div>
                <div class="perfomance_containerOnce">
					<img src="img/gallery/7.png" alt="10">
					<div class="perfomance_text">
						<h2>«Дядя Ваня»</h2>
					</div>
				</div>
                <div class="perfomance_containerOnce">
					<img src="img/gallery/4.png" alt="11">
					<div class="perfomance_text">
						<h2>Друзья</h2>
					</div>
				</div>
                <div class="perfomance_containerOnce">
					<img src="img/gallery/9.png" alt="12">
					<div class="perfomance_text">
						<h2>Русалочка</h2>
					</div>
				</div>
                <div class="perfomance_containerOnce">
					<img src="img/gallery/10.png" alt="13">
					<div class="perfomance_text">
						<h2>Синий свет</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="footer_container">
				<h2>ТЕАТР ТАЛАНТЛИВЫХ АКТЕРОВ</h2>
				<img src="icons/logoLight.svg" alt="logo">
				<div class="footer_addres">
					<h3>Санкт-Петергург</h3>
					<h3>ул. Рубинштейна, 18</h3>
				</div>
				<div class="footer_number">
					<h3>+ 7 (945) 678 - 34 - 09</h3>
					<h3>hello@ufomusthestrelove.com</h3>
				</div>	
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
	<script src="js/script.js"></script>
</body>

</html>