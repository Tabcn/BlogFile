<?php
    //接收表单数据
    $oldtitle = $_POST['oldtitle'];  //原标题
    $title = $_POST['title']; //新标题
    $content = $_POST['content']; //新内容

    //将新内容写入到旧文件中
    file_put_contents('./data/arts/'.$oldtitle,$content);

    //将旧文件名更改为新文件名
    rename('./data/arts/'.$oldtitle,'./data/arts/'.$title);

    //跳转
    message('修改成功','artlist');

