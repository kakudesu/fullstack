<?php
    $module = $_GET['module'];
    $action = $_GET['action'];
    $token = md5sum($module.date('Y-m-d',time()).'#$@%!*'.$action);
    if($token != $_GET['token']){
        alarm('access deny');
        exit();
    }
    ?>