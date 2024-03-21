<?php

namespace App\Model;

use App\Helper\Logger;
use Exception;

class Item extends DB{
    protected $table = "items";
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

    public function store($name) {
        
        $sql = "INSERT INTO $this->table (`id`,`name`) VALUES (NULL,'$name')";
  
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

    function delete($id) {
        $sql = "DELETE FROM $this->table WHERE `id` = $id";
  
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

    function find($id) {
        $sql = "SELECT * FROM $this->table WHERE `id` = $id";
  
        try {
            $res = [];
            $result = $this->con->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $res[] = $row;
                }
               }
               return $res[0];
         } catch (Exception $e) {
             Logger::info($e->getMessage());
         }
    }
    function update($id,$name) {
        $sql = "UPDATE $this->table SET `name` = '$name' WHERE `id` = $id";
  
        try {
            $result = $this->con->query($sql);
           return true;
         } catch (Exception $e) {
             Logger::info($e->getMessage());
         }
    }

 
}