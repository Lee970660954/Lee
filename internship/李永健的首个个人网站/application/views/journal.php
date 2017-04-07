<?php
    $loginedUser = $this->session->userdata('loginedUser');
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lee's Journal</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/index.css"/>
</head>
<body class="skin">
<?php include'logined_header.php';?>
<div id="journal" class="journal skin">
    <div class="wrapper">
        <div class="journal-nav">
            <ul class="journal-nav-menu clearfix">
                <li><a href="admin/my_journal">我的日志</a></li>
                <li><a href="admin/journal">写日志</a></li>
<!--                <li><a href="#">草稿箱</a></li>-->
<!--                <li><a href="#">设置</a></li>-->
            </ul>
        </div>
        <div class="journal-main clearfix">
            <form action="admin/save_journal" method="post">
                 <span class="t1">标题：</span><input type="text" name="title" class="title">
                <input class="journal-main-wordpad" contenteditable="true" name="content"/>
                <button name="submit" class="jsub">发表</button>
            </form>
            <div class="journal-main-list">
                <h3>日志分类</h3>
                <ul class="journal-main-list-class">
                    <li><a href="javascript:">随笔</a></li>
                    <li><a href="javascript:">日记</a></li>
                    <li><a href="javascript:">小说</a></li>
                    <li><a href="javascript:">转载</a></li>
                    <li><a href="javascript:">阅读空间</a></li>
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
<?php include'footer.php';?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/header.js"></script>
</body>
</html>