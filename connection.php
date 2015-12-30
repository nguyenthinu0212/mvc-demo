<?php
/**
 * Created by PhpStorm.
 * User: Ha Anh Son(hason61vn@gmail.com)
 * Date: 30/12/2015
 */
class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=php_mvc', 'root', '', $pdo_options);
        }
        return self::$instance;
    }
}
?>