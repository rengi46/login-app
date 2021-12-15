<?php 

if(isset($_POST)){
    $arr_clients= array("name" =>$_POST["name"],"email"=> $_POST["email"], "password" => $_POST["password"] );
    $json_string = json_encode($arr_clients);
    $file="./json/users.json";
    file_put_contents($file, $json_string);
}

// $json_string= json_encode($arr_clients);
// $file="./json/users.json";
// file_put_contents($file,$json_string);
// }
// header("location: ");