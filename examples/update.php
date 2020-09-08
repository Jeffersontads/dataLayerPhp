<?php
require __DIR__."/../vendor/autoload.php";

use src\Models\User;

//quando eu quero fazer um cadastro vou simplesmente criar um objeto
$user = new User();

var_dump($user);