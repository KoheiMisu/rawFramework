<?php

Class ViewHelper {

    /**
     * @param string
     */
    public function elements($fileName)
    {
        require_once Elements . DS . $fileName . '.php';
    }

    /**
     * @param string
     */
    public function fetch()
    {
        require_once $this->templateDir . DS . $this->template;
    }

    /**
     * @param string
     */
    public function form($path)
    {
        echo "

        ";
    }

    /**
     * @param string
     * @return string
     */
    public function h($content)
    {
        return htmlspecialchars($content, ENT_QUOTES);
    }


    /**
     * @param string
     */
    public function js()
    {
    }

    /**
     * @param string
     */
    public function css()
    {
    }

    /**
     * @param string
     */
    public function img()
    {
    }


}
