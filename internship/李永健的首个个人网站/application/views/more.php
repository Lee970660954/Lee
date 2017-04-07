<?php
    $loginedUser = $this->session->userdata('loginedUser');
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lee's More</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/index.css"/>
</head>
<body>
    <?php include'logined_header.php';?>
    <div id="more" class="more skin">
        <div class="wrapper clearfix">
            <ul class="more-author">
                <li><a href="JavaScript:"><img src="assets/images/Leeyj.png" alt=""/></a></li>
                <li>姓名：李永健</li>
                <li>出生日期：1995年 12月 10日</li>
                <li>毕业院校：东北林业大学</li>
                <li>专业：电子信息工程</li>
                <li>毕业年份：2018年</li>
                <li>工作身份：实习生</li>
            </ul>
            <div class="more-info">
                <p>个人简介：</p>
                <p>There's a phrase in Buddhism, 'Beginner's mind.' It's wonderful to have a beginner's mind.
                    佛教中有一句话：初学者的心态；拥有初学者的心态是件了不起的事情。自从进入大学以来，无论是
                    在书籍中，还是在其他的媒体中，这句话都是我听过的最能打动人心的一句话，这是我的偶像—乔布
                    斯说过的一句话。
                    我同样在大学的学习生活中不断践行这句话，我喜欢编程时用代码解决自己遇到的问题，因为代码的
                    轻便、灵巧和通用性，我在兴趣的指引中走上了编程的“不归路”，在学过的语言中，
                    我很喜欢JavaScript这种语言，因为它轻便、灵活，实用性高，也是它成就了我做的这个网站。
                </p>

            </div>
        </div>
    </div>
    <?php include'footer.php';?>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/header.js"></script>
</body>
</html>