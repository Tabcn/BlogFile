<?php
    //接收文章标题
    $title = $_GET['title'];
    //删除对应的文件
    unlink('./data/arts/'.$title);
    //跳转
    message('删除成功','index.php?a=artlist');
