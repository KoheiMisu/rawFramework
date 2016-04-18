<?php

Class ArticlesController extends BaseController{

    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
    }

    public function indexAction()
    {
        var_dump($this->request->getPost());
        $articles = Article::findAll();
        $this->render(['articles' => $articles]);
    }

    public function confirmAction()
    {
        die;
        // Article::create([
        //     'title' => 'test',
        //     'content' => 'testContent',
        //     'category' => 'PHP',
        //     'updated' => date('Y-m-d H:i:s'),
        // ]);
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
