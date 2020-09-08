<?php
require __DIR__."/../vendor/autoload.php";

use src\Models\User;

$user = new User();

$list = $user->find()->fetch(true);
 // abrir uma documentação para que entenda-se o metodo que temos disponivel
/** @var  $userItem  User*/
foreach ($list as $userItem)
    {
        var_dump($userItem->data());
        foreach ($userItem->addresses() as $address)
        {
            var_dump($address->data);
        }
    }