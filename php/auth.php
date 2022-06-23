<?php
    require "db.php";
    require "syst.php";

    if(isset($_POST['Button'])){ 

    if(empty($_POST["name"]) && empty($_POST["password"]) && empty($_POST["surname"])){
        $_SESSION["message"] = 'Введены не все данные';   
    }
    else{        
        $qry = "SELECT * FROM user WHERE Name_User = :name AND BINARY Password = :password AND BINARY Surname_User = :surname";
            $parm = (array(
                ":name" => $_POST["name"],
                ":password" => $_POST["password"],
                ":surname" => $_POST["surname"]
            ));
            $user = $database->getAll($qry,$parm);
            saveAuth($user["ID_User"],$database);
            return $user["Name_User"];

            // header ('Location: ../index.php');
            // print_r ($qry,$parm);

            // if ($_POST["password"] = $user["password"]){
            //     echo "Совпадение есть!";
            // }
        
        
    }

    }
?>