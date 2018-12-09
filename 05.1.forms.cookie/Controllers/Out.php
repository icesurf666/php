<?php


class Out extends Controller
{
    public function run()
    {
        $this->out();
        $this->view();
    }

    protected function view()
    {
        $name = $this->checkAccess();
        require 'Views/IndexView.php';
    }

}