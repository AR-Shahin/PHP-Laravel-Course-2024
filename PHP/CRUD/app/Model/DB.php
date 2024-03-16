<?php

namespace App\Model;

use Exception;

class DB{
    private $host = "localhost:3306";
    private $userName = "root";
    private $password = "password";

    private $dbName = "php_course";

    protected $con;

    function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->userName,$this->password,$this->dbName);

        try{
            if($this->con){
                $this->con;
                // echo "Connected!";
            }else{
                echo "Not Connected!";
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}