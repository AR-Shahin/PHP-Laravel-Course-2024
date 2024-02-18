<?php
session_start();
$database = [];
$err = "";
if(isset($_REQUEST["sign_in"])){

    $name = $_POST["userName"];

    if(empty($name)){
        $err = "Name is required!";
    }else{
        array_push($database,$name);

        $_SESSION["db"] = $database;

        header("Location: login.php");

    }
}?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Register</h2>
    <p style="color: red;"><?php
        if(!empty($err) && isset($err)){
            echo $err;
        }
    ?></p>
    <form action="./sign-in.php" method="POST" autocomplete="off">
        <input type="text" name="userName"> <br>
        <button name="sign_in">Submit</button>
    </form>
</body>
</html>


