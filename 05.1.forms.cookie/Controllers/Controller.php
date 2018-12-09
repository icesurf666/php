<?php

abstract class Controller {

    protected $viewName;
    protected $access = false;
    protected $endSession = false;

    public function __construct($viewName)
    {
        $this->viewName = $viewName;
    }

    abstract function run();

    protected function checkAccess()
    {
      $access = new Access();

      $name = $access->Session();

        if ($this->endSession) {
            $access->SessionExit();
            return null;
        }

      if (!empty($name)) {
        $this->access = true;
      }

      return $name;
    }

    protected function out()
    {
        $this->endSession = true;
    }

    protected function view()
    {
        $name = $this->checkAccess();
        require 'Views/' . $this->viewName . 'View.php';
    }
}
