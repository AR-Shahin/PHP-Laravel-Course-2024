<?php

echo "Copyright 2009- " . date("Y") ." <br>";



// echo "The time is " . date("h:i:sA");


// $d=strtotime("10:30pm April 15 2014");
// echo "Created date is " . date("Y-m-d h:i:sa", $d);


// echo  time();

setcookie("authToken","test value", -(time() + (86400 * 30)));



// echo $_COOKIE['authToken'];


$a = 10;
$b = 0;

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

// var_dump($age);

$jsonData = json_encode($age);

var_dump(json_decode($jsonData));
exit;

try{
    if($b == 0){
        throw new Exception("Custom");
    }else{

        echo $a / $b;
    }
    
}catch(Exception $e){
    echo $e->getMessage();
}
catch(Exception $e){
    echo "custom error block";
}
finally{
    echo "finally";
}











exit;
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

