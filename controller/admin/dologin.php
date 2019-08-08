    <?php
        //接收表单数据
        $username = $_POST['username'];
        $password = $_POST['password'];

    //判断账号是否正确
    $account = file_get_contents('./data/account');
    //根据行转换为数组
    $account = explode("\n",$account); // tab 202cb962ac59075b964b07152d234b70
    // 拼出账号格式 
    $tmpAccount = trim($username.' '.md5($password));
    //循环每个账号
    foreach($account as $v){
            if($tmpAccount == trim($v)){
                //账号密码正确
                //保存登录信息
                $_SESSION['name']=$username;
                //跳转后台首页
                message('登录成功','');
            }
    }

    message('账号或密码错误','login');