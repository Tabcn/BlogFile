<?php
    // 前台入口文件
    //定义常量
    define('INDEX','index.php');
    // 项目初始化(加载函数库)
    include('./functions.php');

    //接收请求
    $action = !empty($_GET['a'])?$_GET['a']:'index';

    // 加载相应功能模块
    include('./controller/index/'.$action.'.php');