<?php
    require "db.php";

    if (isset($_POST["Button"])){
        if (isset($_POST["checkbox"])){
            //проверка введенных данных
            
            $qry = "INSERT INTO `feedback` (`Name_Feedback`, `Phone_Feedback`, `Email_Feedback`, `Message_Feedback`)
                     VALUES (:name, :phone, :email, :message)";
            
            $parm = array(
                    "name" => $_POST["name"],
                    "phone" => $_POST["phone"],
                    "email" => $_POST["email"],
                    "message" => $_POST["message"]
                 );
            $database->InsertData($qry,$parm);
            header('Location: ../contact.php');
        }
        else{
            $_SESSION["message"] = 'Вы не дали согласие на обработку персональных данных';
            header('Location: ../contact.php');
        }
    }
?>

