<?php

Class ArticlesController extends BaseController{

    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        // $Articles = new Article('root', '1212');
    }

    public function indexAction()
    {
    }

    public function confirmAction()
    {
        echo "hello";
    }

    public function registAction()
    {
        echo "hello";
    }

    public function detailAction($id=null)
    {
        echo "hello";
    }

    public function searchAction()
    {
        echo "hello";
    }



}
