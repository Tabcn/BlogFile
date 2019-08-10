<?php
    //获取文章内容
    $title = $_GET['title'];
    $content = file_get_contents('./data/arts/'.$title);

    //显示文章详情页模版
    template('detail');