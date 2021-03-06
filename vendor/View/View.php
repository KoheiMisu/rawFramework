<?php

Class View extends ViewHelper {

    protected $layout = 'default.php';
    protected $templateDir;
    protected $template;
    protected $vars;

    /**
     * @param string $controller action名のテンプレートが呼ばれる
     * @param string $action action名
     */
    public function init($controller, $action)
    {
        $this->templateDir = View . DS . $controller;
        $this->template = $action . '.php';
    }

    /**
     * @param mixed stinrg | array
     * @return void
     */
    public function render($vars)
    {
        $this->vars = $vars;
        require_once Layouts . DS . $this->layout;
    }

    /**
     * @param string $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout . '.php';
    }

    /**
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template . '.php';
    }

}
