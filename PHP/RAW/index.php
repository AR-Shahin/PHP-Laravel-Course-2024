<?php
$a = 13;
$b = 20;
$c = 30;



// if($a % 2 == 0){
//     if(true){

//     }else{
//         if(true){

//         }
//     }
//     echo "Even";
// }else{
//     echo "Odd";
// }

// echo $a % 2 == 0 ? "Even" : "Odd" ;

// if(($a === 10) && ($b == 20) ){
//     echo "If block!";
// }
// elseif(true){

// }
// elseif(true){

// }
// elseif(true){

// }
// elseif(true){

// }
// elseif(true){

// }

// else {
//     echo "Else block";
// }

// $ch = 10;

// switch($ch){
//     case 1:
//         echo "ONE";
//         break;

//     case 2:
//         echo "Two";
//         break;

//     default :
//         echo "Nothing!";
// }

$food = "bar";

// echo match ($food) {
//     'apple' => 'This food is an apple',
//     'bar' => 'This food is a bar',
//     'cake' => 'This food is a cake',
// };
// echo "Hello World! <br>";

// for($i=1;$i<=10;$i++){
//     if($i == 5){
//         continue;
//     }
//     echo "Hello World -> {$i}! <br>";
// }

// $i = 1;
// while($i <= 5){
//     echo "$i <br>";
//     $i ++;
// }

// do{
//     echo "I am working! <br>";
//     $i++;
// }
// while(false);


$arr = range(1,10,2); // 1,2,3,4,5,6,7,8,9,10

// echo rand(1,100);
// var_dump($arr);

// foreach($arr as $key=>$value){
//     echo $value . " -> index = {$key}<br>";
// }


$arr = [
    [1,2,3],
    [2,4,5],
    [2,3,4]
];

// $arr = array(array(),array(),array());


$members = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

// foreach($members as $key=>$value){
//     echo $key . " {$value}<br>";
// }


function sayHello (string $name,int $roll=10):void{
    echo "Hello $name $roll!";
}
$n = "Shahin";
// sayHello($n,200);


$x = 10;

function anotherFunction(){
    global $x;
    $y = 100;
    echo $x;
}

anotherFunction();

echo $y;