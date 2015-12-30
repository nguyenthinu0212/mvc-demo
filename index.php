<?php
/**
 * Created by PhpStorm.
 * User: Ha Anh Son(hason61vn@gmail.com)
 * Date: 30/12/2015
 */
require_once('connection.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
} else {
    $controller = 'pages';
    $action     = 'home';
}

//Let’s get the basic stuff done: create a database php_mvc that contains a table posts with 3 columns id (INT PRIMARY auto_increment), author (VARCHAR 255, note that in a real life situation you could also put an index on this one as searching through posts with a sepcific author may happen quite often) and content (TEXT).
//
//Let’s move on to creating our first file: index.php.
//The first thing it’s going to do is making sure we have something to query the database any time later in the execution.
//As this is a pretty specific thing we’re gonna put it in a specific file that we’re going to require in our index.php.
require_once('views/layout.php');
?>