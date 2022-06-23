<?php
    require "style.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/about.min.css">
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
        <h1>О ТЕАТРЕ</h1>
        </div>
    </header>
    <section class="aboutTheatre">
        <div class="container">
            <div class="aboutTheatre_container">
                <div class="aboutTheatre_img">
                    <img src="img/index/2/1.png" alt="1">
                </div>
                <div class="aboutTheatre_text">
                    <!-- первая запись названия блока -->
                    <h2>ИСТОРИЯ ТЕАТРА</h2>
                    <p>Театр Ufomus был открыт в 1944 году в Ленинграде. Постепенно театр стал приобретать известность в
                        городе и популярность в среде интеллигенции. Первой
                        работой в театре стал в 1974 году спектакль "Разбойник" по пьесе К. Чапека, который привлек...
                    </p>
                </div>
            </div>
            <div class="aboutTheatre_container">

                <div class="aboutTheatre_text">
                    <!-- повторяющаяся запись удалена -->
                    <p>В репертуаре постепенно начинают преобладать оперы и балеты. Происходит становление школы балета.
                        В 1998 году решением Генеральной Ассамблеи Союза европейских театров Ufomus присвоен статус
                        Театра Европы. В разные годы на сцене театра ставили спектакли режиссёры Юрий Дворкин, Генриетта
                        Яновская, Кама Гинкас, Лев Додин.
                    </p>
                </div>
                <div class="aboutTheatre_img">
                    <img src="img/about/1.jpg" alt="2">
                </div>
            </div>
        </div>
    </section>
    <section class="mis">
        <div class="container">
            <div class="mis_title">
                <h2>МИССИЯ ТЕАТРА</h2>
            </div>
            <div class="mis_text">
                <p>Миссия театра Ufomus направлена на сохранение культурных ценностей,
                    развития деятельности в сфере культуры и образования в области культуры и искусства.</p>
            </div>

        </div>
    </section>
    <section class="actor">
        <div class="container">
            <h2>АРТИСТЫ И МУЗЫКАНТЫ</h2>
            <p>У нас выступаю молодые и талантливые актеры.</p>
            <div class="actor_container1">
                <div class="actor_containerOnce">
                    <img src="img/index/4/2.png" alt="1" class="first_photo">
                    <h2>Самойлова Елизавета</h2>
                    <h2 class="actor_containerOnce_textSecond">26 лет</h2>
                </div>
                <div class="actor_containerOnce">
                    <img src="img/index/4/3.png" alt="2">
                    <h2>Мартынова Екатерина</h2>
                    <h2 class="actor_containerOnce_textSecond">33 года</h2>
                </div>
                <div class="actor_containerOnce">
                    <img src="img/index/4/5.png" alt="3">
                    <h2>Бахтеев Артем</h2>
                    <h2 class="actor_containerOnce_textSecond">23 года</h2>
                </div>
                <div class="actor_containerOnce">
                    <img src="img/index/4/6.png" alt="4">
                    <h2>Морозова Мария</h2>
                    <h2 class="actor_containerOnce_textSecond">46 лет</h2>
                </div>
            </div>
            <button class="aboutTheatre_btn" onclick="window.location.href='people.php'">Посмотреть всех</button>
            <p class="text"> Музыка в театре - важнейшее средство характеристики образов, ведущий проводник
                художественной идеи.
                Исполнителями музыки, звучащей в Ufomus театре, являются одаренные музыканты нашего времени. </p>
            <div class="actor_container1">
                <div class="actor_containerOnce">
                    <img src="img/about/5.png" alt="1" class="first_photo">
                    <h2>Караулова Светлана</h2>
                    <h2 class="actor_containerOnce_textSecond">26 лет</h2>
                </div>
                <div class="actor_containerOnce">
                    <img src="img/about/7.png" alt="2">
                    <h2>Воронцов Сергей</h2>
                    <h2 class="actor_containerOnce_textSecond">33 года</h2>
                </div>
                <div class="actor_containerOnce">
                    <img src="img/about/2.png" alt="3">
                    <h2>Одинцов Максим</h2>
                    <h2 class="actor_containerOnce_textSecond">23 года</h2>
                </div>
                <div class="actor_containerOnce">
                    <img src="img/about/3.png" alt="4">
                    <h2>Морозова Мария</h2>
                    <h2 class="actor_containerOnce_textSecond">46 лет</h2>
                </div>
            </div>
            <button class="aboutTheatre_btn" onclick="window.location.href='people.php'">Посмотреть всех</button>
        </div>
    </section>
    <section class="aboutTheatre">
        <div class="container">
            <h2 class="title">МАСШТАБНЫЕ ПРЕДСТАВЛЕНИЯ</h2>
            <div class="aboutTheatre_container">
                <div class="aboutTheatre_text">
                    <h2>СИНИЙ СВЕТ </h2>
                    <p>Сюжет о создании каждым своей реальности — Диснеем — мультипликационной, Геббельсом и Гитлером —
                        политической, Рифеншталь и Фанком — кинореальности — налицо. История проецирования выдуманного
                        мира на судьбу — тоже вещь очевидная.
                    </p>
                    <p>10.03.2019 года</p>
                </div>
                <div class="aboutTheatre_img">
                    <img src="img/about/4.png" alt="1">
                    <h2>Сцена из спектакля “Синий свет”</h2>
                </div>
            </div>
            <div class="aboutTheatre_container">
                <div class="aboutTheatre_img">
                    <img src="img/about/8.png" alt="2">
                    <h2>Сцена из спектакля “Здвездный мальчик”</h2>
                </div>
                <div class="aboutTheatre_text">
                    <h2>ЗВЕЗДНЫЙ МАЛЬЧИК</h2>
                    <p>Важно, что режиссер поставил не «чистокровную» сказку Уайльда, а пьесу Людмилы Разумовской,
                        написанную при участии Александра Образцова. Поэтому в спектакле много новых сюжетных линий и
                        совершенно иной финал.
                    </p>
                    <p>22.05.2020 года</p>
                </div>
            </div>
            <div class="aboutTheatre_container">
                <div class="aboutTheatre_text">
                    <h2>ПРИВЕДЕНИЕ</h2>
                    <p>Драма о том, что таится за стенами благополучного дома. Как и большинство творений знаменитого
                        норвежского драматурга, пьеса «Привидения» затрагивает проблемы семейных отношений.
                    </p>
                    <p>13.09.2020 года</p>
                </div>
                <div class="aboutTheatre_img">
                    <img src="img/about/6.png" alt="3">
                    <h2>Сцена из спектакля “Приведение”</h2>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
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
                <h3 class="footer_date">UFOMUS Ⓒ2022</h3>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>