<?php


namespace src\Models;


use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct("addresses", ["user_id"], "", false);
    }

    public function add(User $user, string $street, string $number):Address
    {
        $this->user_id = $user->id;
        $this->street = $street;
        $this->number = $number;

        return $this;
    }
}