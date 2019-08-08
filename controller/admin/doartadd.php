<?php
    //将文章写入文件
    file_put_contents('./data/arts/'.trim($_POST['title']),trim($_POST['content']));
    //跳转
    message('添加文章成功','artlist');