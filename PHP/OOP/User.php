<?php

$name = "";

abstract class Model{
    public function connect(){
        // 
    }


    abstract function pay():void;
}
class User extends Model{
    public $name;
    protected $age;
    private $password;

    function setPassword($pass)  {
        $this->password = $pass;
    }

    function getPassword()  {
        return $this->password;
    }


    function pay() :void {
        
    }
}

class Agent extends User{

}


abstract class Animal{
    public $name = "";
    function __construct($name){
        $this->name = $name;
    }
    function getName() : void {
        echo $this->name;
    }
    abstract function makeSound();
    
}


class Dog extends Animal{
    function __construct($name){
        parent::__construct($name);
    }

    function makeSound(){
        echo "geo geo";
    }
}


class Tiger extends Animal{
    function __construct($name){
        parent::__construct($name);
    }

    function makeSound(){
        echo "tiger sound";
    }
}

interface IName{
    public function abc();
}

$dog = new Dog("Dog");
$tiger = new Tiger("tiger");

$dog->makeSound();