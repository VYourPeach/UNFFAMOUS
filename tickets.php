<?php
    require "style.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/tickets.min.css">
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
            <h1>БИЛЕТЫ</h1>
        </div>
    </header>

    <section class="search">
        <div class="container">
            <div class="search_container">
                <div class="search_containerInput">
                    <input required placeholder="Поиск" type="text" class="search_input">
                    <button><img src="icons/search.png" alt="surch"></button>
                </div>
            </div>
        </div>
    </section>

    <section class="ticket">
        <div class="container">
            <div class="ticket_container">
                <div class="ticket_containerOnce">
                    <div class="ticket_first">
                        <div class="ticket_first_text">
                            <h2>2 Июня</h2>
                            <p>Четверг</p>
                            <p>19: 30</p>
                        </div>
                        <img src="icons/Line.png" alt="line">
                    </div>
                    <div class="ticket_second">
                        <img src="img/ticket/2.png" alt="1">
                        <div class="ticket_second_text">
                            <h2>Синий свет</h2>
                            <p>Миеко Оучи</p>
                        </div>
                    </div>
                    <div class="ticket_thrid">
                        <h3>от 800р.</h3>
                        <button>КУПИТЬ БИЛЕТ</button>
                    </div>
                </div>
                <div class="ticket_containerOnce">
                    <div class="ticket_first">
                        <div class="ticket_first_text">
                            <h2>5 Июня</h2>
                            <p>Воскресенье</p>
                            <p>19: 00</p>
                        </div>
                        <img src="icons/Line.png" alt="line">
                    </div>
                    <div class="ticket_second">
                        <img src="img/ticket/1.png" alt="2">
                        <div class="ticket_second_text">
                            <h2>Звездный мальчик</h2>
                            <p>Оскар Уайльд</p>
                        </div>
                    </div>
                    <div class="ticket_thrid">
                        <h3>от 950р.</h3>
                        <button>КУПИТЬ БИЛЕТ</button>
                    </div>
                </div>
                <div class="ticket_containerOnce">
                    <div class="ticket_first">
                        <div class="ticket_first_text">
                            <h2>7 Июня</h2>
                            <p>Вторник</p>
                            <p>19: 30</p>
                        </div>
                        <img src="icons/Line.png" alt="line">
                    </div>
                    <div class="ticket_second">
                        <img src="img/ticket/3.png" alt="3">
                        <div class="ticket_second_text">
                            <h2>Наш класс</h2>
                            <p>Тадеуш Слободзянек</p>
                        </div>
                    </div>
                    <div class="ticket_thrid">
                        <h3>от 850р.</h3>
                        <button>КУПИТЬ БИЛЕТ</button>
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
                <h3 class="footer_date">UFOMUS Ⓒ2022</h3>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>