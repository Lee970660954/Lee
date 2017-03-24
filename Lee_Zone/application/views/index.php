<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lee's Zone</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/carousel.css"/>
</head>
<body>
<div id="header" class="header skin">
    <div class="wrapper clearfix">
        <a href="#" class="header-logo"></a>
        <ul class="header-menu">
                <li><a href="admin/login">登陆</a></li>
                <li><a href="javascript:">|</a></li>
                <li><a href="admin/regist">注册</a></li>
        </ul>
        <div id="header-marquee"></div>
        <ul class="header-skin">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <span class="header-s1">空间主题色调: </span>
    </div>
</div>
<div id="nav" class="nav skin">
    <div class="wrapper">
        <ul class="nav-menu clearfix">
            <li><a href="admin/index">主页</a></li>
            <li><a href="#journal">日志</a></li>
            <li><a href="#album">相册</a></li>
            <li><a href="#phrase">留言板</a></li>
            <li><a href="#">今日心情</a></li>
            <li><a href="#">私人订制</a></li>
            <li><a href="http://www.4339.com">生活娱乐</a></li>
            <li><a href="admin/more">更多</a></li>
        </ul>
    </div>
</div>
<div id="body">
    <div class="wrapper">
        <div class="my-mood"></div>
    </div>
</div>
<div id="journal" class="journal skin">
    <div class="wrapper">
        <div class="journal-nav">
            <ul class="journal-nav-menu clearfix">
                <li><a href="#">我的日志</a></li>
                <li><a href="#">草稿箱</a></li>
                <li><a href="#">回收站</a></li>
                <li><a href="#">设置</a></li>
                <li><a href="#">写日志</a></li>
            </ul>
        </div>
        <div class="journal-main clearfix">
            <div class="journal-main-wordpad" contenteditable="true"></div>
            <input type="button" name="submit" value="发表" class="jsub">
            <div class="journal-main-list">
                <h3>日志分类</h3>
                <ul class="journal-main-list-class">
                    <li><a href="#">全部日志</a></li>
                    <li><a href="#">个人日记</a></li>
                    <li><a href="#">STAR的日记</a></li>
                    <li><a href="#">说说记录</a></li>
                    <li><a href="#">阅读空间</a></li>
                </ul>
                <h3>搜索日志</h3>
                <form action="#">
                    <input type="text" placeholder="请输入关键字" name="text"/>
                    <input type="button" value="搜索" name="button"/>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="album" class="album skin">
    <div class="wrapper">
        <h3>相册</h3>
        <ul class="album-nav clearfix">
            <li><a href="#">上传照片</a></li>
            <li><a href="#">创建相册</a></li>
        </ul>
        <div class="album-thumbs">
            <div class="album-thumb1">
                <a href="admin/photowall1">
                    <img src="assets/images/17031000.png" alt=""/>
                    <p>苏格拉底没有底</p>
                </a>
            </div>
            <div class="album-thumb2">
                <a href="admin/photowall2">
                    <img src="assets/images/17031001.png" alt=""/>
                    <p>塞纳河畔</p>
                </a>
            </div>
            <div class="album-thumb3">
                <a href="admin/photowall3">
                    <img src="assets/images/17031003.png" alt=""/>
                    <p>迪丽热巴&赵又廷</p>
                </a>
            </div>
        </div>
        <div id="album-carousel"></div>
    </div>

</div>
<div id="phrase" class="phrase skin">
    <div class="wrapper">
        <div class="mainframe skin">
            <div class="title">留言板</div>
            <div class="message">主人寄语</div>
            <div class="info">
                这是主人留下的寄语~
            </div>
            <div class="content" contenteditable="true"></div>
            <input type="button" name="submit" value="发表" class="subbtn">
            <div class="numofmessage">留言(0)</div>
            <!-- 下面是留言区 -->
            <div class="msgFrame">
                <div class="content_1">
                    <img class="name" src="assets/images/lyj.jpg" alt="photo">
                    <!--<img class="name" src="http://qlogo3.store.qq.com/qzone/1262283870/1262283870/100?1481718124" alt="photo">-->
                    <div class="mainInfo">
                        <div class="userId"><a href="#">zipple</a></div>
                        <div class="conInfo">
                            这是一条留言。
                        </div>
                        <div class="time">2017-03-02  23:46:11</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="footer skin">
    <div class="wrapper">
        <ul class="footer-list1">
            <li><span>网页制作者：李永健</span></li>
            <li><span>联系方式：15046658648</span></li>
            <li><span>邮编：150040</span></li>
            <li><span>Copyright © 2016 - 2017 <a href="">http://www.mrleeyj.club</a> 李永健个人网站版权所有</span></li>
        </ul>
    </div>
</div>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/require.js" data-main="assets/js/index"></script>
<script src="assets/js/header.js"></script>
<script src="assets/js/textbox.js"></script>
<!--<script>-->
<!--$('.journal-main-wordpad').wysiwyg();-->
<!--</script>-->
</body>
</html>