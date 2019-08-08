<?php
    //获取所有文章
    $data = scandir('./data/arts/');
    //去除两件特殊的文件. 和 .. 
    unset($data[0]);
    unset($data[1]);
    //循环每篇文章，每篇文章取100个字符
    foreach($data as &$v){
        $file = fopen('./data/arts/'.$v,'r');
        $v = [
            'title'=>$v,
            'content'=> fread($file,100)
        ];
        fclose($file);
    }
    //加载前台首页
    template('index');