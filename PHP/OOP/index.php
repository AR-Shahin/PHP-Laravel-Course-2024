<?php

class Human{
    // public $name = "default value";
    // public $age = "";
    

    // function sayHello($n){

    //     $this->display($n);
    //     // echo "Hello $n";
    // }

    function display($var){
        echo "$var";
    }


    // function sayBye()  {
    //     echo "Good Bye $this->name";
    // }

    // public function __construct($name,$age)
    // {
    //     $this->name = $name;
    //     $this->age = $age;
    //     echo "Invoke From Constructor!<br>";
    // }

    public function __construct(public $name,public $age)
    {
        
    }

    // function __destruct()
    // {
    //     echo "<br>Invoke From Destructor!<br>";
    // }

    // function __invoke()
    // {
    //     echo "I am from invoke magic method";
    // }

    // function __get($key)  {
    //     echo $key . " Does not exist";
    // }

    // function __set($key,$val)  {
    //     $key = $val;

    //     echo $key;
    // }

}

class User extends Human{

    // function display($var)
    // {
    //     echo "Our display";
    // }

    function test() : void {
        echo "TEST";
    }

    public function __construct(public $name,public $age,$height)
    {
        parent::__construct($name,$age);
    }
}



$u = new User("ars",20,5.7);

// $u->display("ars");

echo $u->name;

// $user1 = new Human();

// $user1();

// echo $user1->salary;
// $user2 = new Human("User 2","20");


// $user1->name = "Shahin";
// $user2->name = "ars";

// $user1->sayHello("ARS");

// $user1->sayBye();
// $user2->sayBye();

// if($user1 instanceof User){
//     echo "Yes";
// }else{
//     echo "NO";
// }
