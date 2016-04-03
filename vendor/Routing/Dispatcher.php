<?php

class Dispatcher
{
    private $sysRoot;

    public function setSystemRoot($path)
    {
        $this->sysRoot = rtrim($path, '/');
    }

    public function dispatch()
    {
        // パラメーター取得（末尾の / は削除）
        if ($_SERVER['REQUEST_URI'] == '/') {
            $param = 'articles/index';
        } else {
            //先頭と末尾の' / 'を削除
            $param = preg_replace(['/^\//', '/\/$/'], '', $_SERVER['REQUEST_URI']);
        }

        $params = array();
        if ('' != $param) {
            // パラメーターを / で分割
            $params = explode('/', $param);
        }

        // １番目のパラメーターをコントローラーとして取得
        $controller = "index";
        if (0 < count($params)) {
            $controller = $params[0];
        }

        // 2番目のパラメーターをアクションとして取得
        $action= 'index';
        if (1 < count($params)) {
            $action = $params[1];
        }

        // パラメータより取得したコントローラー名によりクラス振分け
        $classPrefix = ucfirst(strtolower($controller)); //ex articles -> Articles
        $className = $classPrefix . 'Controller';
        $controllerPath = $this->sysRoot . '/Controller/' . $className . '.php';

        if (file_exists($controllerPath)) {
            // クラスファイル読込
            require_once $controllerPath;
        } else {
            echo "
                <strong>
                  <font color=\"red\">
                    Can't Read Controller '$controllerPath'.
                  </font>
                </strong>
            ";
            die;
        }

        // クラスインスタンス生成
        $controllerInstance = new $className($classPrefix, $action);
        // アクションメソッドを実行
        $actionMethod = $action . 'Action';
        $controllerInstance->$actionMethod();
        $controllerInstance->render();
    }
}
