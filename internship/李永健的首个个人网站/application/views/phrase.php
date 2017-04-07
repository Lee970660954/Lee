<?php
    $loginedUser = $this->session->userdata('loginedUser');
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lee's photowall2</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/Photowall.css"/>
</head>
<body class="skin">
<?php include'logined_header.php';?>
<div id="phrase" class="phrase skin">
    <div class="wrapper">
        <div class="mainframe skin">
            <div class="title">留言板</div>
            <div class="message">主人寄语</div>
            <div class="info">
                这是主人留下的寄语~
            </div>
            <form action="admin/save_msg" method="post">
                <input class="content" contenteditable="true" name="content"/>
                <input type="hidden" name="receiver" value="<?php echo $loginedUser -> user_id?>">
                <input type="hidden" name="sender" value="<?php echo $loginedUser -> user_id?>">
<!--                <input type="button" name="submit" value="发表" class="subbtn">-->
                <button name="submit" class="subbtn">发表</button>
            </form>
            <div class="numofmessage">留言(0)</div>
            <!-- 下面是留言区 -->
            <div class="msgFrame">
                <?php if($results){?>
                <?php foreach ($results as $result){?>
                <div class="content_1">
                    <img class="name" src="assets/images/lyj.jpg" alt="photo">
                    <!--<img class="name" src="http://qlogo3.store.qq.com/qzone/1262283870/1262283870/100?1481718124" alt="photo">-->
                    <div class="mainInfo">
                        <div class="userId"><a href="#"><?php echo $result->username?></a></div>
                        <div class="conInfo">
                            <?php echo $result->content?>
                        </div>
                        <div class="time"><?php echo $result->post_date?></div>
                        <span class="phrase-delete"><a href="admin/delete_msg?msg_id=<?php echo $result->msg_id?>">删除</a></span>
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
<!--<script src="assets/js/react.js"></script>-->
<!--<script src="assets/js/react-dom.js"></script>-->
<!--<script src="assets/js/browser.js"></script>-->
<script src="assets/data/imageDatas.js"></script>
<script src="assets/js/Photowall2.js" type="text/babel"></script>
</body>
</html>