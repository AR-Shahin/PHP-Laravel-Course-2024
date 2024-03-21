<?php

namespace App\Model;

use App\Helper\Logger;
use Exception;

class User extends DB{
    protected $table = "users";
    public $items = [];

    public function get() {
        $sql = "SELECT * FROM $this->table";

        try {
           $result = $this->con->query($sql);
           if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $this->items[] = $row;
            }
           }
           return $this->items;
        } catch (Exception $e) {
            Logger::info($e->getMessage());
        }
    }

    public function register(...$params) {
        
        $sql = "INSERT INTO $this->table (`name`,`email`,`password`) VALUES ('$params[0]','$params[1]','$params[2]')";
  
        // var_dump($sql);
        // exit;
        try {
            $result = $this->con->query($sql);
            if($result)
            {
                return true;
            }else{
                return false;
            }
         } catch (Exception $e) {
             Logger::info($e->getMessage());
         }
    }
    
    public function login(...$params) {
        

        // SELECT * FROM users WHERE email = 'ars';
        $sql = "SELECT * FROM $this->table WHERE email = '$params[0]'";
        // $sql = "SELECT * FROM {$this->table} WHERE email = '{$params[0]}'";
  
        //  var_dump($sql);
        // exit;
        try {
            $user = null;
            $result = $this->con->query($sql);
            if($result)
            {
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $user = $row;
                    }
                    if($user){
                //    var_dump(password_verify($params[1],$user["password"]),$user);
                $hash = md5($params[1]);
                        // if(password_verify($params[1],$user["password"])){
                            if($hash  == $user["password"]){
                            session_start();
                            $_SESSION["userName"] = $user["name"];
                            return "USER_FOUND";
                        }else{
                            return "INCORRECT";
                        }
                       
                    }
                }else{
                    return "NO_USER_FOUND";
                }
            
            }else{
                return false;
            }
         } catch (Exception $e) {
             Logger::info($e->getMessage());
         }
    }
    
    function hit()  {
        echo "OK";
    }
}