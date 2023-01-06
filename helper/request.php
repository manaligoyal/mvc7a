<?php
function request()
{
    $obj = (object)['controller' => 'AuthorController', 'method' => 'index', 'get' => $_GET, 'post' => $_POST, 'para' => null];
    if (isset($_GET['url'])) {
        $url = explode('/', trim($_GET['url'], '/'));
        $obj->controller = ucfirst(strtolower($url[0])) . "Controller";
        $obj->method = (isset($url[1])) ? strtolower($url[1]) : $obj->method;
        $obj->para = (isset($url[2])) ? $url[2] : $obj->para;
        unset($obj->get['url']);
    }
    // print_r($obj);
    return $obj;
}
