<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Login</h4>
    <form action="" method="POST">
        <input type="text" name="userName"> <br>
        <button  name="login">Submit</button>
    </form>
</body>
</html>

<?php

session_start();
$err = "";
if(isset($_REQUEST["login"])){

    $name = $_POST["userName"];

    if(empty($name)){
        $err = "Name is required!";
    }else{
       if(in_array($name,$_SESSION["db"],)){
        header("Location: index.php");
       }else{
        echo "User not found!";
       }

  

    }
}?>