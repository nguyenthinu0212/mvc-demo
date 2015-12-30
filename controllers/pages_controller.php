<?php
/**
 * Created by PhpStorm.
 * User: Ha Anh Son(hason61vn@gmail.com)
 * Date: 30/12/2015
 */
class PagesController {
    public function home() {
        $first_name = 'Son';
        $last_name  = 'Ha';
        require_once('views/pages/home.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }
}
?>