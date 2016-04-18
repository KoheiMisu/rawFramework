<?php

Class BaseController{

    protected $request;
    protected $view;
    protected $controller;
    protected $action;

    public function __construct($controller, $action)
    {
        // リクエスト
        $this->request = new Request();
        $this->view = new View();
        $this->controller = $controller;
        $this->action = $action;
    }

    public function render($vars)
    {
        $this->view->init($this->controller, $this->action);
        $this->view->render($vars);
    }

}
