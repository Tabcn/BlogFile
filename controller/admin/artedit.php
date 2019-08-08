<?php
    //接收文章标题
    $title = $_GET['title'];
    //读取文章内容
    $content = file_get_contents('./data/arts/'.$title);
    //显示编辑表单,并填入内容
    view('post-edit');