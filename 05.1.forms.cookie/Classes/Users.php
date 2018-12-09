<?php


class Users extends User
{
    public function getByUsers()
    {
        $arr = DB::getUsers();
        $users = [];
        foreach ($arr as $user) {
            $users[] = $this->getByName($user[0]);
        }

        return $users;
    }
}