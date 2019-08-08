<?php
    // 入口文件
    //定义常量
    define('ADMIN','admin.php');
    // 项目初始化(session、加载函数库)
    include('./functions.php');
    startSession();

    //接收请求，默认是main页面
    $action = !empty($_GET['a'])?$_GET['a']:'main';
    //无需登录验证的白名单
    $white = ['login','dologin'];
    if(!in_array($action,$white)){
        //白名单之外的页面都需要先判断用户是否登录
        check_login();
    }

    // 加载相应功能模块
    include('./controller/admin/'.$action.'.php');