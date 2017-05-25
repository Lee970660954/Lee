<div class="reg_container">
    <div class="reg_bg"></div>
    <form id="msform" name="frm" action="users/do_reg" method="POST">
        <fieldset>
            <h2 class="fs-title">创建个人账户</h2>
            <h3 class="fs-subtitle">带*必填，不带*选填</h3>
            <input type="text" class="reg_username" name="username" autofocus="autofocus" placeholder="Username*" value="" />
            <div class="advice advice1">用户名不能为空</div>
            <div class="advice advice1-1">用户名已存在</div>
            <input type="password" name="pass" class="reg_pass1" placeholder="Password*"/>
            <div class="advice advice3">密码不能为空</div>
            <input type="password" class="reg_pass2" name="cpass" placeholder="Confirm Password*" " />
            <div class="advice advice4">两次密码输入不一致</div>
            <div class="advice advice4.1">密码不能为空</div>
            <input type="text" name="num" class="reg_num" placeholder="Phone number">
            <input type="text" name="email"  class="reg_email" placeholder="Email">
            <input type="submit" name="submit" class="submit action-button" value="注册" />
        </fieldset>
    </form>
</div>