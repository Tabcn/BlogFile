<?php
    //获取所有文章标题
    $artlist = scandir('./data/arts/');

    //清除两个特殊的文件 . 和 ..
    unset($artlist[0]);
    unset($artlist[1]);

    //加载文章列表
    view('posts');