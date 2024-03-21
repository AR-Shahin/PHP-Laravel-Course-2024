<?php

use App\Model\User;
session_start();
if(isset($_SESSION["userName"])){
    header("Location: /index.php");
}
require "./bootstrap/app.php";
require "./views/layouts/header.php";
$m = [];
$user = new User;
if(isset($_REQUEST["login"])){
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $data = $user->login($email,$password);

    if($data == "NO_USER_FOUND"){
        $m["NO_USER_FOUND"] = "User Doesn't exist!";
    }elseif($data == "INCORRECT"){
        echo "INCORRECT";
    }
    else{
       header("Location: /index.php");
    }
}

?>

<h1 class="text-center">Login</h1>

<div class="row justify-content-center">
    <div class="col-md-5">
    <?php
        if(isset($m["NO_USER_FOUND"])){
            echo $m['NO_USER_FOUND'];
        }
        ?>
    <form action="" method="POST">

    <div class="my-2">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="my-2">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="my-2">
       <button class="btn btn-sm btn-success" name="login">Login</button>
    </div>
</form>
<a href="./register.php">Register</a>
    </div>
</div>


<?php

require "./views/layouts/footer.php";?>
