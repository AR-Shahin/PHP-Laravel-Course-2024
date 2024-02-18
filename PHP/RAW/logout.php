<?php

session_start();

unset($_SESSION["db"][0]);

header("Location: login.php");