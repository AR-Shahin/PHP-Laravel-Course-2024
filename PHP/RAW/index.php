<?php

include "./inc/header1.php";

echo "our code";
// include_once "./inc/header.php";
// include_once "./inc/header.php";
// include "./inc/header.php";
// include "./inc/header.php";
// require "./inc/header.php";
// echo "llllll";
include "./inc/footer.php";



die;
function heyHello(string $name,Closure $sendEmail) : void {

    // 
    // 

    $sendEmail($name);
}

// heyHello("Shahin",fn($name) => "" );

$sum = function($a,$b){
    return $a + $b;
};

$sub = fn($a,$b) => $a =$b;

// var_dump($sub(20,10));

// echo gettype($sum);
// var_dump($sum);

// echo $sum(10,20);




function sendEmail($name,$email,$port)  {
    
    var_dump($name);
}

function sum(...$args){
    // var_dump($args);

    // foreach($args as $a){
    //     echo $a ." ";
    // }

    echo array_sum($args);
}
// sendEmail("name","email",209);

// sendEmail(email:"ars@mail.com",name:"sahahin",port:300);

// exit;
// die("Die");
// echo "hi";
// sum(10,20,20);

$arr = [10,25,35,40,50];

$brr = array_map(function($item){
    return $item + 2;
},$arr);

$c = array_reverse($arr);

$d = array_filter($arr,fn($item) => $item % 2 == 0);

$e = array_chunk($arr,2);


// var_dump($e);

// var_dump(in_array(35,$arr));


$str = "I love bangladesh";

$a = explode("-",$str);

// echo implode("-",$arr);

// var_dump($a);

// echo count($arr);

// echo md5("ars");

// echo strtolower("MAFNSDLFNSDL");
// echo strtoupper("ars");

echo ucwords("shahin is a developer");
echo ucfirst("shahin is a developer");

