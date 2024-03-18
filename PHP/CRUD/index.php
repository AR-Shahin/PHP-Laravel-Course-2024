<?php

use App\Model\Item;
session_start();
require "./bootstrap/app.php";
require "./views/layouts/header.php";

$item = new Item();
if(isset($_REQUEST["deleteBtn"])){
    $id = $_POST["id"];
    if( $item->delete($id)){
        $_SESSION["key"] = "Deleted!";
        echo   $_SESSION["key"];
        exit;
    }else{
        echo "ERROR";
        die();
    }
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
            <form action="" method="POST">
                <div class="my-2">
                    <label for=""><b>Name</b></label>
                    <input type="text" class="form-controller" name="name">
                </div>
                <div class="my-2">
                    <button name="submit_item_form" class="btn btn-sm btn-success">Submit</button>
                </div>
            </form>
        </div>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
                <?php
                    foreach($item->get() as $row){
                ?>
            <tr>
                <td><?= $row["id"]?></td>
                <td><?= $row["name"]?></td>
                <td>
                    <a href="" class="btn btn-sm btn-success">View</a>
                    <a href="./edit.php?id=<?=base64_encode($row['id'])?>" class="btn btn-sm btn-info">Edit</a>
                    <form action="./app/Controller/ItemController.php" class="d-inline" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id']?>">
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger" name="deleteBtn">Delete</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>


<?php
require "./views/layouts/footer.php";?>


