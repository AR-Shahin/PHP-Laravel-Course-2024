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
}