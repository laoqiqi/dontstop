<?php
namespace  app\zhuce;
class RegistrationTree{

    //注册树池子
    //author:齐文
    protected  static  $objects = null;

    //author:齐文
    //把对象挂到树上
    public static function set($key,$object)
    {
        self::$objects[$key] = $object;
    }

    //author:齐文
    //从树上获取对象 没有则注册
    public static function get($key)
    {
        if(!isset(self::$objects[$key])){
            self::$objects[$key] = new $key;
        }
        return self::$objects[$key];
    }

    //author:齐文
    public static function _unset($key)
    {
        unset(self::$objects[$key]);
    }



}