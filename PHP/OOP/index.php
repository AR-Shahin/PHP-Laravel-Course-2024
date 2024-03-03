<?php
include "./User.php";
include "./app/User.php";
include "./app/Controller/HomeController.php";

include "./vendor/autoload.php";
use app\User as A;

use app\Controller\HomeController;
use NumberToWords\NumberToWords;
$numberToWords = new NumberToWords();
$numberTransformer = $numberToWords->getNumberTransformer('en');
// echo $numberTransformer->toWords(100);

echo NumberToWords::transformNumber('en', 200);
// class Repo{
//     function sayHello()  {
//         echo "Hello";
//     }

//     function goodBye()  {
//         echo "Bye";
//     }
// }

// class Helper{
//     static function __callStatic($method, $arguments)
//     {
//         $proxy = new Repo;

//         if(method_exists($proxy,$method)){
//             return $proxy->$method(...$arguments);
//         }else{
//             throw new Exception("$method doesn't exit");
//         }
        
//     }
// }

// class Human{

//     public const STATUS = "false";

//     public $name = "ARS";
//     public static $age = 10;

//     public function sayHello() :self{
//         echo "Hello <br>";
//         return $this;
//     }

//     public  function sayHi() {
//         echo "Hi <br>";
//        return $this;
//     }


//     public function setAge($val){
//         self::$age = $val;
//     }

//     public function getAge(){
//         echo self::$age;
//     }

//     static function __callStatic($method, $arguments)
//     {
//         echo $method  ." doesn't exits";
//     }

// }

// // echo Human::STATUS;

// // $human2 = new Human;

// // Human::ars();

// // $human1->getAge();
// // $human1->setAge(1000);
// // $human2->getAge() ;



// (new Human)->sayHello()->sayHi();


// (new A)();