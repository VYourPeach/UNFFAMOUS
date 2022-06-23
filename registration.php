<?php
    require "style.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.min.css">
    <title>UFOMUS| Registration</title>
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
                <h2>РЕГИСТРАЦИЯ</h2>
            </div>
            <div class="text">
                    <p>Для регистрации введите свои личные данные.</p>
                </div>
            <div class="form_container">
                <form action="php/reg.php" method = "POST">
                    <div class="form_Onece">
                        <input required placeholder="Введите фамилию" name="surname" type="text" class="form_input">
                        <input required placeholder="Введите имя" name="name" type="text" class="form_input">
                        <input required placeholder="Введите отчество" name="patronymic" type="text" class="form_input">

                        <div class="form_Onece" id = "form_two">
                            <input required placeholder="Введите email" name="email" type="text" class="form_input">
                            <input required placeholder="Введите телефон" name="phone" type="text" class="form_input">
                            <input required placeholder="Введите пароль" name="password" type="text" class="form_input">
                          </div>
                            <?php
                                    if (isset($_SESSION["message"])){
                                        echo "<p class = 'message'> " . $_SESSION["message"] . " </p>";
                                    }                    
                                        unset($_SESSION["message"]);
                                ?> 
                        <button name = "Button" class="btn">ОТПРАВИТЬ</button>
                    </div>
                </form>
            </div>
    </main>
    <footer>
        <p class="footer_date_l">UFOMUS  Ⓒ2022</p>
    </footer>
</body>
</html>