<?php
define('ROOT',__DIR__."/../");
// 类的自动加载
function load($class)
{
    $path=str_replace('\\','/',ROOT.$class);
    require($path.".php");
}
spl_autoload_register("load");
$controller="\controllers\IndexController";
$action="index";
// 解析路由
if(isset($_SERVER["PATH_INFO"]))
{
    $router=explode("/",$_SERVER["PATH_INFO"]);
    $controller="\controllers\\".ucfirst($router[1])."Controller";
    $action=$router[2];
    // echo $controller;
    // echo $action;
}
$c=new $controller;
$c->$action();