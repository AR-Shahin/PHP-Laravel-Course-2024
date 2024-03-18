<?php

use App\Model\Item;
session_start();
require "./bootstrap/app.php";
require "./views/layouts/header.php";

$item = new Item();
if(isset($_REQUEST["id"])){
    $data = $item->find(base64_decode($_REQUEST["id"]));
}

if(isset($_REQUEST["submit_edit_form"])){
    $data = $item->update(base64_decode($_REQUEST["id"]),$_REQUEST["name"]);
    header("Location: /index.php");
}

?>


<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6 ">
            <?php
            if(isset($_SESSION["key"])){
            ?>
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <p><?= $_SESSION["key"]?></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>
            <a href="/" class="btn btn-sm btn-info">Back</a>
            <form action="" method="POST">
                <div class="my-2">
                    <label for=""><b>Name</b></label>
                    <input type="text" class="form-controller" name="name" value="<?= $data['name']?>">
                </div>
                <div class="my-2">
                    <button name="submit_edit_form" class="btn btn-sm btn-success">Submit</button>
                </div>
            </form>
        </div>
       
    </div>
</div>


<?php
require "./views/layouts/footer.php";?>


