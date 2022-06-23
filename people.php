<?php
    require "style.php";
	require "php/db.php";
	$qry = "SELECT * FROM `employees`";
    $fead = $database->getAll($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/people.min.css">
	<title>UFOMUS</title>
</head>
<body>
	<header class="oneDisplay">
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
                    <h1>ЛЮДИ ТЕАТРА</h1>
                </div>
			</div>
		</div>
	</header>
	<section class="actor">
		<div class="container">
			<h2>АКТЕРЫ ТЕАТРА</h2>
            <div class="actor_text">
                <p>Мастера, воплощающие в жизнь сценические образы из театральных произведений.
                    А мастерство актера определяется его талантом, харизмой и правильным выбором амплуа на сцене.</p>
            </div>
           
			<div class="actor_container1">
				<div class="actor_containerOnce">
				
					<img src="img/index/4/2.png" alt="1" class="first_photo">
					
					<h2>Мартынова Екатерина</h2>
					<h2 class="actor_containerOnce_textSecond">33 года</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/20.png" alt="2">
					<h2>Бахтеев Артем</h2>
					<h2 class="actor_containerOnce_textSecond">23 года</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/16.png" alt="3">
					<h2>Петров Андрей</h2>
					<h2 class="actor_containerOnce_textSecond">34 года</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/17.png" alt="4">
					<h2>Шмелев Павел</h2>
					<h2 class="actor_containerOnce_textSecond">28 лет</h2>
				</div>
			</div>
            <div class="actor_container1">
				<div class="actor_containerOnce">
					<img src="img/actor/14.png" alt="1" class="first_photo">
					<h2>Рогова Василиса</h2>
					<h2 class="actor_containerOnce_textSecond">22 года</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/7.png" alt="2">
					<h2>Шпогов Даниил</h2>
					<h2 class="actor_containerOnce_textSecond">25 лет</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/5.png" alt="3">
					<h2>Самойлова Елизавета</h2>
					<h2 class="actor_containerOnce_textSecond">26 лет</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/15.png" alt="4">
					<h2>Верещук Светлана</h2>
					<h2 class="actor_containerOnce_textSecond">52 года</h2>
				</div>
			</div>
			<div class="actor_container2">
				<div class="actor_containerOnce">
					<img src="img/actor/18.png" alt="5" class="first_photo">
					<h2>Морозова Мария</h2>
					<h2 class="actor_containerOnce_textSecond">46 лет</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/6.png" alt="6">
					<h2>Петров Михаил</h2>
					<h2 class="actor_containerOnce_textSecond">60 лет</h2>
				</div>
			</div>
		</div>
	</section>
	<section class="actor ">
		<div class="container">
			<h2>МУЗЫКАНТЫ ТЕАТРА</h2>
            <div class="actor_text">
                <p>Для создания определенной эмоциональной атмосферы спектакля необходима музыка. 
					Она важна так же, как и те, кто ее исполняет.</p>
            </div>
           
			<div class="actor_container1">
				<div class="actor_containerOnce">
					<img src="img/actor/11.png" alt="1" class="first_photo">
					<h2>Караулова Светлана</h2>
					<h2 class="actor_containerOnce_textSecond">35 лет</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/13.png" alt="2">
					<h2>Воронцов Сергей</h2>
					<h2 class="actor_containerOnce_textSecond">27 лет</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/8.png" alt="3">
					<h2>Одинцов Максим</h2>
					<h2 class="actor_containerOnce_textSecond">38 лет</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/9.png" alt="4">
					<h2>Морозова Мария</h2>
					<h2 class="actor_containerOnce_textSecond">46 лет</h2>
				</div>
			</div>
			<div class="actor_container2">
				<div class="actor_containerOnce">
					<img src="img/actor/19.png" alt="5" class="first_photo">
					<h2>Воронина Надежда</h2>
					<h2 class="actor_containerOnce_textSecond">58 лет</h2>
				</div>
				<div class="actor_containerOnce">
					<img src="img/actor/10.png" alt="6">
					<h2>Волков Егор</h2>
					<h2 class="actor_containerOnce_textSecond">35 лет</h2>
				</div>
                <div class="actor_containerOnce">
					<img src="img/actor/12.png" alt="6">
					<h2>Лазарева Ольга</h2>
					<h2 class="actor_containerOnce_textSecond">29 лет</h2>
				</div>
			</div>
		</div>
	</section>
    <section class="aboutTheatre">
		<div class="container">
			<h2 class="aboutTheatre_title">РЕЖИССЁРЫ-ПОСТАНОВЩИКИ</h2>
			<div class="aboutTheatre_container">
				<div class="aboutTheatre_img">
					<img src="img/actor/3.png" alt="1">
                    <h3>Астахов Алексей</h3>
                    <h3>38 лет</h3>
				</div>
				<div class="aboutTheatre_text">
					<p>В 2012 году окончил Санкт-Петербургскую государственную академию театрального искусства (мастерская Ю.М.Красовского) по специальностям «Режиссура театра» и «Актерское искусство».
                        Режиссер:
                         «Сказки», А.С. Пушкин, театр «Пушкинская школа», СПб, 2014;
                         «Странные женщины», по мотивам произв. А.С. Пушкина, театр «Пушкинская школа», СПб, 2013;
                         «Трамвай ‘Желание’”, Т.Уильямс, театр «На Моховой», СПб, 2012.
					</p>

				</div>
                
			</div>
            <div class="aboutTheatre_container">
				<div class="aboutTheatre_img">
					<img src="img/actor/2.png" alt="2">
                    <h3>Ганева Мария</h3>
                    <h3>50 лет</h3>
				</div>
				<div class="aboutTheatre_text">
					<p>В 1983г. закончила Ленинградский институт театра, музыка и кинематографии по специальности режиссура драмы
                        (класс Г.А. Товстоногова).
                        Режиссер: 1983- «Фантазии Фарьятева» А. Соколовой, Драматический театр в г. Ямболе; 1983- «Провинциальные анекдоты» А. Вампилова, Драматический театре г. Пазарджикa; 1984- «Земля вертится» С. Стратиева, Драматический театр в г. Пазарджике и многого другого.
					</p>

				</div>
                
			</div>
            <div class="aboutTheatre_container">
				
				<div class="aboutTheatre_text">
					<p>Родился в 1972 году. В 1999 году окончил СПбГАТИ по специальности «актер театра кукол» (курс И.Зайкина), в 2001 - по специальности «режиссер» (курс Г.Козлова).
                        Первая постановка по рассказу А.Платонова «Река Потудань» сразу принесла коллективу известность, а его организатору и художественному руководителю репутацию одного из самых многообещающих молодых режиссеров театра кукол.
					</p>
				</div>
                <div class="aboutTheatre_img">
					<img src="img/actor/1.png" alt="3">
                    <h3>Кудашов Дмитрий</h3>
                    <h3>45 лет</h3>
				</div>
                
			</div>
            <div class="aboutTheatre_container">
	
				<div class="aboutTheatre_text">
					<p>Закончила в 1979 году Ленинградский государственный институт театра, музыки и кинематографии (класс А.И. Кацмана и Л.А.Додина).
                        Режиссер спектаклей: «Братья и сестры», «Повелитель мух», «Зимняя сказка», «Чевенугр», «Жизнь и судьба». Поставила 14 спектаклей в разных театрах России и за рубежом. Награждена знаком Министерства культуры «За достижения в культуре» (2002 г.)
					</p>

				</div>
                <div class="aboutTheatre_img">
					<img src="img/actor/4.png" alt="4">
                    <h3>Колотова Наталья</h3>
                    <h3>53 года</h3>
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