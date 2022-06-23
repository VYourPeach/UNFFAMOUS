<?php
    require "style.php";
    //указан верный путь к файлу
    require "php/db.php";
    $qry = "SELECT * FROM `employees`";
    $fead = $database->getAll($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/contact.min.css">
<link rel="stylesheet" href="css/gallery.min.css">
    <title>UFOMUS| Contact</title>
</head>
<body>
    <header>
        <div class="container">
			<div class="oneDisplay_wrappers">
				<div class="oneDisplay_inner">
					<div class="oneDisplay_menu">
						<button class="oneDisplay_btn" style="color:black">меню</button>
						
						<nav class="oneDisplay_nav hide">
							<ul>
								<li><a href="about.php" class="oneDisplay_btn" style="color:black">О ТЕАТРЕ</a></li>
								<li><a href="people.php" class="oneDisplay_btn" style="color:black">ЛЮДИ ТЕАТРА</a></li>
								<li><a href="gallery.php" class="oneDisplay_btn" style="color:black">ГАЛЕРЕЯ</a></li>
								<li><a href="tickets.php" class="oneDisplay_btn" style="color:black">БИЛЕТЫ</a></li>
								<li><a href="contact.php" class="oneDisplay_btn" style="color:black">КОНТАКТЫ</a></li>
							</ul>
						</nav>
                        <button class="oneDisplay_btn" style="margin-left: 44px;" onclick="window.location.href='login.php'">профиль</button>
					</div>
					<div class="oneDisplay_logo">
						<a href="index.php"><img src="icons/Logo.svg" alt="logo"></a>
					</div>
					<div class="oneDisplay_number">
						<img src="icons/phonedark.svg" alt="phone">
						<h3 style="color:black">+ 7 (945) 678 - 34 - 09</h3>
					</div>
				</div>
        <div class="oneDisplay_title_text">
            <h1>КОНТАКТЫ</h1>
        </div>
    </header>
    <section class="table">
        <div class="container">
            <table>
                <tr class="table_second_row">
                    <?php foreach($fead as $item):?>
                    <td class="table_column1"><?=$item["ID_Post"]?></td>
                    <td class="table_column2"><?=$item["Surname_Employee"]?> <?=$item["Name_Employee"]?> <?=$item["Patronymic_Employee"]?></td>
                    <td class="table_column3"><?=$item["Phone_number"]?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </section>
    <section class="form">
        <div class="container">
            <div class="form_title">
                <h2>ОБРАТНАЯ СВЯЗЬ</h2>
            </div>
            <div class="form_container">
                <div class="text">
                    <p>Есть вопросы? Отправьте нам сообщение и мы ответим Вам в ближайшем времени.</p>
                </div>
                <!-- форма обратной связи -->

                    <div class="form_Onece">
                      <form action="php/feedback.php" method="POST">
                        <input required placeholder="Введите имя" name="name" type="text" class="form_input">
                        <input required placeholder="Введите телефон" name="phone" type="text" class="form_input">

                        <input required placeholder="Введите почту" name="email" type="text" class="form_input">
                        <input required placeholder="Введите сообщение" name="message" type="text" class="form_input" maxlength = "500">
                      
                        <div class="form_check">
                            <input type="checkbox" name="checkbox">
                            <p>Я согласен на обработку персональных данных</p>
                        </div>
                        <?php
                            if (isset($_SESSION["message"])){
                                   echo "<p class = 'message'> " . $_SESSION["message"] . " </p>";
                            }                    
                                  unset($_SESSION["message"]);
                        ?> 
                        <button type="submit" class="btn" name="Button">ОТПРАВИТЬ</button>
                      </form>
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