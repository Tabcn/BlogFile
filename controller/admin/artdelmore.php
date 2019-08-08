<?php
    //接收要删除的文章标题
    if(!isset($_POST['deltitle'])){
        message('请先勾选文章','artlist');
    }
    $deltitle = $_POST['deltitle'];
    //循环删除文章
    foreach($deltitle as $v){
        unlink('./data/arts/'.$v);
    }
    //提示跳转
    message('删除完成','artlist');