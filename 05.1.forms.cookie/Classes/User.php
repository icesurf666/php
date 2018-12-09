<?php


class User
{

    public function getByName($name)
    {
        $balance = DB::getBalance($name);
        $user = [
                'name' => $name,
                'balance' => $balance,
        ];

        return $user;
    }
}