<?php

// interface twoDPrint{
//     public function print();
// }

// interface threeDPrint{
//     public function printTwo();
// }

// class Printer implements twoDPrint,threeDPrint{
//     public function print(){

//     }

//     function printTwo() {
        
//     }
// }


trait Helper{
    public $name = "Shahin";
    function sayHello()  {
        echo "Hello $this->name";
    }
}

trait Logger{
    function log()  {
        echo "log";
    }
}


class User{
    use Helper,Logger;

}


// (new User)->sayHello();