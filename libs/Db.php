<?php
namespace libs;
class Db
{
    private static $_obj=null;
    private function __clone(){}
    private $_pdo;
    private function __construct()
    {
        // 连接数据库
        $this->$_pdo=new \PDO("mysql:dbhost=127.0.0.1;dbname=myshop","root","123");
        $this->$_pdo->exec("SET NAMES utf8");
    }
    // 返回唯一的对象
    public static function make()
    {
        if(self::$_obj===null)
        {
            self::$_obj=new self;
        }
        return  self::$_obj;
    }
}