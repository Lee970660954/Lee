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
        <div class="msgFrame">
            <?php if($results){?>
                <?php foreach ($results as $result){?>
                    <div class="content_1">
                        <div class="mainInfo">
                            <div class="userId"><a href="#"><?php echo $result->title?></a></div>
                            <div class="conInfo">
                                <?php echo $result->content?>
                            </div>
                            <div class="time"><?php echo $result->post_date?></div>
                            <span class="phrase-delete"><a href="admin/delete_journal?article_id=<?php echo $result->article_id?>">删除</a></span>
                        </div>
                    </div>
                <?php };?>
            <?php };?>
        </div>
    </div>
    </div>
</div>
<?php include'footer.php';?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/header.js"></script>
</body>
</html>