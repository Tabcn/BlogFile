<?php
    //清空$_SESSION
    $_SESSION = [];

    //跳转
    message('退出成功','index.php?a=login');