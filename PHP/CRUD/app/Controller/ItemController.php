<?php
require "../../vendor/autoload.php";

use App\Model\Item;

$item = new Item;

if(isset($_REQUEST["submit_item_form"])){
    $name = $_POST["name"];
    if(empty($name)){
        header("Location: /index.php");
        exit;
    }else{
        if($item->store($name)){
            header("Location: /index.php");
        }
    
        echo "Error";
    }
}


