<?php
require __DIR__."/../vendor/autoload.php";

use src\Models\Address;
use src\Models\User;

//quando eu quero fazer um cadastro vou simplesmente criar um objeto
$user = new User();
$user->first_name = "Lucas";
$user->last_name = "Sotto";
$user->genre = "M";
$user->save();

$addr = new Address();
$addr -> add($user,"nome da rua", "22b");
$addr->save();

//com este vardump podemos ver como o objeto esta se comportando
var_dump($user);