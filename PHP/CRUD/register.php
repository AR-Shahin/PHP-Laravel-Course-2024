<?php
require "./bootstrap/app.php";
require "./views/layouts/header.php";
?>

<h1 class="text-center">Register</h1>

<div class="row justify-content-center">
    <div class="col-md-5">
    <form action="">
    <div class="my-2">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="my-2">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="my-2">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
</form>
    </div>
    <a href="./login.php">Login</a>
</div>


<?php

require "./views/layouts/footer.php";?>
