<?php

    require_once('config.php');
    require_once('function.php');

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }else {
            $action = 'index';
        }
    }else {
        $controller = 'student';
        $action = 'index';
    }

    // định tuyến
    require_once('route.php');

?>