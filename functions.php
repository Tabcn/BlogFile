<?php
    //提示消息并跳转
    function message($msg,$url){
        $url=ADMIN.'?a='.$url; 
        echo <<<JS
    <script>
        alert('{$msg}');
        location.href='{$url}';
    </script>
JS;
exit;
    }

    //判断是否登录
    function check_login(){
        //判断session是否开启，若未开启则先进行开启操作
        if(!session_id()){
            session_start();
        }
        //判断是否有登录标记
        if(!isset($_SESSION['name'])){
            //没有登录标记,跳转至登录页面
            message('请先登录','index.php?a=login');
        }
    }

    //加载静态页
    function view($name){
        include('./view/admin/'.$name.'.html');
    }

    //开启session
    function startSession(){
        //判断session是否开启
        if(!session_id()){
            session_start();
        }
    }