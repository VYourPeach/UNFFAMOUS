<?php
    require "style.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.min.css">
    <title>UFOMUS| Login</title>
</head>
<body>
    <header>
        <div class = "cLose">
            <button onclick="history.back();return false;"><p>Закрыть</p></button> 
            <img src="icons/arrowDown.svg" alt="ArrowDown" height = "15">
        </div>
    </header>
    <main>
        <div class="form_title">
                <h2>ВХОД В ПРОФИЛЬ</h2>
            </div>
            <div class="text">
                    <p>Для входа в профиль введите свои данные.</p>
                </div>
            <div class="form_container">
                <form action="php/auth.php" method = "POST">
                    <div class="form_Onece">
                        <input required placeholder="Введите фамилию" name="surname" type="text" class="form_input">
                        <input required placeholder="Введите имя" name="name" type="text" class="form_input">
                        <input required placeholder="Введите пароль" name="password" type="text" class="form_input">
                        <?php
                            if (isset($_SESSION["message"])){
                                echo "<p class = 'message'> " . $_SESSION["message"] . " </p>";
                            }                    
                                unset($_SESSION["message"]);
                        ?> 
                    <button name = "Button" class="btn">ОТПРАВИТЬ</button>
                </form>
                <a href = "registration.php"><p>Зарегистрироваться</p></a>
            </div>
    </main>
    <footer>
        <p class="footer_date_l">UFOMUS  Ⓒ2022</p>
    </footer>
</body>
</html>