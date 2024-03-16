<?php

use App\Model\Item;

require "./bootstrap/app.php";
require "./views/layouts/header.php";

$item = new Item();

?>


<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6 ">
            <form action="./app/Controller/ItemController.php" method="POST">
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
                    <a href="" class="btn btn-sm btn-info">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>


<?php
require "./views/layouts/footer.php";?>
