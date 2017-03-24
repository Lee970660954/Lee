<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lee's Regist</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/supersized.css"/>
</head>
<body>
    <form action="admin/do_regist" id="regist" class="regist" method="post">注册
        <input type="text" name="username" id="username" placeholder="用户名"/><span id="name_msg"></span>
        <input type="password" name="password" id="password" placeholder="密码"/><span id="pass_msg"></span>
        <input type="password" name="repassword" id="repassword" placeholder="确认密码"/><span id="repass_msg"></span>
        <input type="text" name="email" id="email" placeholder="电子邮箱"/><span id="email_msg"></span>
        <button>注册</button>
    </form>
    <script src="assets/js/jquery-1.8.2.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/supersized.3.2.7.min.js"></script>
    <script src="assets/js/supersized-init.js"></script>
    <script>
        $(function(){
            var opts = {
                bSubmit: true
            };
            $('#username').on('blur',function(e,param){
                $.get('admin/check_name',{
                    uname:this.value
                },function(data){
                    if (data == 'true'){
                        $('#name_msg').html('');
                    }else{
                        $('#name_msg').html('用户名已存在，请重新输入！');
                        param && (param.bSubmit = false);
                    }
                },'text')
            })
            $('#password').on('keyup',function(){
                if(this.value.length<6){
                    $('#pass_msg').html('密码至少六位！')
                }else{
                    $('#pass_msg').html('');
                }
            })
            $('#repassword').on('blur',function(){
                if(this.value!=$('#password').val()){
                    $('#repass_msg').html('两次输入密码不一致！');
                }else{
                    $('#repass_msg').html('');
                }
            })
            $('#email').on('blur',function(e,param){
                if(this.value.indexOf('@')==-1){
                    $('#email_msg').html('请输入合法的email地址');
                    param && (param.bSubmit = false);
                }else{
                    $('#email_msg').html('');
                }
            })
            $('#regist').on('submit', function(){
                $('#username').trigger('blur', opts);
                $('#email').trigger('blur', opts);
                return opts.bSubmit;
            });
        });

    </script>
</body>
</html>