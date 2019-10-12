<?php

namespace core;

class imooc
{
    public static $classMap = array();
    public static function run()
    {
        $route = new \core\lib\route();
    }

    public static function load($class)
    {
        /**
         *
         */
        if (isset($classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = IMOOC . '/' . $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }
}
