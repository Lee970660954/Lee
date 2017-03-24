<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lee's photowall3</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/Photowall.css"/>
</head>
<body>
    <div id="header" class="header skin">
        <div class="wrapper clearfix">
            <a href="#" class="header-logo"></a>
            <ul class="header-menu">
                <li><a href="login.php">登陆</a></li>
                <li><a href="javascript:">|</a></li>
                <li><a href="regist.php">注册</a></li>
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
                <li><a href="index_logined.php">主页</a></li>
                <li><a href="#journal">日志</a></li>
                <li><a href="#album">相册</a></li>
                <li><a href="#phrase">留言板</a></li>
                <li><a href="#">今日心情</a></li>
                <li><a href="#">私人订制</a></li>
                <li><a href="#">生活娱乐</a></li>
                <li><a href="#">更多</a></li>
            </ul>
        </div>
    </div>
    <div id="photowall"></div>
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
    <script src="assets/js/header.js"></script>
    <script src="assets/js/react.js"></script>
    <script src="assets/js/react-dom.js"></script>
    <script src="assets/js/browser.js"></script>
    <script src="assets/data/imageDatas.js"></script>
    <script src="assets/js/Photowall3.js" type="text/babel"></script>
</body>
</html>