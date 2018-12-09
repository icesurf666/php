<?php

class Balance extends Controller
{
    const ADMIN_NAME = 'admin';

    public function run()
    {
        $this->view();
    }

    protected function view()
    {
        $userInstance = new Users();
        $name = $this->checkAccess();
        if ($name == self::ADMIN_NAME) {
            $users = $userInstance->getByUsers();
        }

        $user = $userInstance->getByName($name);
        require 'Views/' . $this->viewName . 'View.php';
    }
}
