<?php
    require "db.php";
    if (isset($_POST["surname"]) && isset($_POST["name"]) && isset($_POST["patronymic"])){
        if (isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["password"])){
            //проверка введенных данны
            if (mb_strlen($_POST["password"]) <= 5 || mb_strlen($_POST["password"]) > 15){
                $_SESSION["message"] = 'Неподходящий пароль';
                header('Location: ../registration.php');
            }
            else
            {
                if(mb_strlen($_POST["patronymic"]) >= 4 && mb_strlen($_POST["name"]) >= 3){
                    //регистрация
                    $h_pass = md5(md5(trim($_POST["password"])));
                    $qry = "INSERT INTO user (Surname_User, Name_User, Patronymic_User, Mail, Password, Phone_number_User) 
                                                        VALUES (:surname, :name, :patronymic, :email, :password, :phone)";
                    $parm = array(
                        "surname" => $_POST["surname"],
                        "name" => $_POST["name"],
                        "patronymic" => $_POST["patronymic"],
                        "email" => $_POST["email"],
                        "password" => $h_pass,
                        "phone" => $_POST["phone"],
                    );
                    $database->InsertData($qry,$parm);
                    echo "Дошло";
                    header('Location: ../login.php');
                   
                }
                else{
                    $_SESSION["message"] = 'Имя или логин указаны неверно';
                }
            }
        }
        else{
            $_SESSION["message"] = 'Необходимо заполнить все поля!';
        }
    }
    else{
        $_SESSION["message"] = 'Необходимо заполнить все поля!';
    }
    
?>