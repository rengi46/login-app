<?php
// in_array
$file="./json/users.json";
$Allusers= file_get_contents($file);
$usersAll= json_decode($Allusers);

if (($_POST)){
    $postEmail= $_POST["email"];
    $postPassword= $_POST["password"];
    header(("Location:../index.php?InvalidPassword"));
    foreach ($usersAll as $user ) {
        print_r($user->name);
        if($postEmail == $user->email){
            if($postPassword == $user->password){
                session_start();
                $_SESSION["email"]= $postEmail;
                $_SESSION["password"]=$postPassword;
                header("Location:../Assets/panel.php");
                exit();
            }
        }
    }
}

