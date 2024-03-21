<?php

use App\Model\User;

require "./bootstrap/app.php";
require "./views/layouts/header.php";

$user = new User();

$errors = [];
$notify = [];
if(isset($_REQUEST["registration"])){
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    if(empty($name)){
        $errors["name"] = "Name Field is Required!";
    }
    if(empty($email)){
        $errors["email"] = "Email Field is Required!";
    }
    if(empty($password)){
        $errors["password"] = "Password Field is Required!";
    }

    if(!empty($name) && !empty($email) && !empty($password)){
        $pass = md5($password);
       $data =  $user->register($name,$email,$pass);

       if($data){
        $notify["register"] = "Registration Successful!";
       }
    }
    // var_dump($name,$email,$password);
}

?>

<h1 class="text-center">Register</h1>

<div class="row justify-content-center">
    <div class="col-md-5">
    <?php
        if(isset($notify["register"])){
            echo $notify['register'];
        }
        ?>
    <form action="" method="POST" autocomplete="off">
    <div class="my-2">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name">
        <?php
        if(isset($errors["name"])){
            echo $errors['name'];
        }
        ?>
    </div>
    <div class="my-2">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email">
        <?php
        if(isset($errors["email"])){
            echo $errors['email'];
        }
        ?>
    </div>
    <div class="my-2">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password">
        <?php
        if(isset($errors["password"])){
            echo $errors['password'];
        }
        ?>
    </div>
    <div class="my-2">
       <button class="btn btn-sm btn-success" name="registration">Submit</button>
    </div>
</form>
    </div>
    <a href="./login.php">Login</a>
</div>


<?php

require "./views/layouts/footer.php";?>
