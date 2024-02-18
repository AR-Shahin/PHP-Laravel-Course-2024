<?php

// echo $_SERVER["REQUEST_METHOD"];
// function increment(&$num) {
//     $num++;
//     echo "Inside function: $num <br>";
// }

// $value = 5;
// increment($value);
// echo "Outside function: $value <br>";
$name = "Shahin";

function hello(){

    // global $name;
    // echo $name;
    echo $GLOBALS['name'];
}

// hello();
// echo $_SERVER['SERVER_NAME'];


session_start();
echo $_SESSION["db"][0];
if(!$_SESSION["db"]){
    header("Location: login.php");
}
// $_SESSION["name"] = "ARS";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Dashboard</h4>
    <p>User Name : <?= $_SESSION["db"][0] ?></p>
    <a href="./logout.php">Logout</a>
    <!-- <form action="./app/controller.php" method="GET">
        <input type="text" name="name"> <br>
        <button>Submit</button>
    </form> -->
</body>
</html>

