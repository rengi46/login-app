<?php
// in_array
$dbUser= array(
    array("email" => "erickayalrias@gmail.com", "password" => "123456"),
    array("email" => "roger@gmail.com", "password" => "12345678"),
    array("email" => "pepe@gmail.com", "password" => "cochepepe"),
);

if (($_POST)){
    $postEmail= $_POST["email"];
    $postPassword= $_POST["password"];
    header(("Location:../index.php?InvalidPassword"));
    foreach ($dbUser as $user) {
        if($postEmail == $user["email"]){
            if($postPassword == $user["password"]){
                session_start();
                $_SESSION["email"]= $postEmail;
                $_SESSION["password"]=$postPassword;
                header("Location:../Assets/panel.php");
                exit();
            }
        }
    }
}

