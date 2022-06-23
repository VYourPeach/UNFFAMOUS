<?php
    function saveAuth($id,$database){
        $_SESSION["id"] = $id;
        $qry = "SELECT ID_User, Surname_User, Name_User, Patronymic_User, Mail FROM user WHERE ID_User = :id";
        $parm = array(
            "id" => $id
        );

        $user = $database->getRow($qry,$parm);
        $_SESSION["Surname"] = $user["Surname_User"];
        $_SESSION["Name"] = $user["Name_User"];
        $_SESSION["Patronymic"] = $user["Patronymic_User"];
        $_SESSION["Mail"] = $user["Mail"];
        $_SESSION["ID_User"] = $user["ID_User"];
    }
?>