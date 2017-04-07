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
    </div>
</div>
<?php include'footer.php';?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/require.js" data-main="assets/js/index"></script>
<script src="assets/js/header.js"></script>
<script src="assets/js/textbox.js"></script>
<script src="assets/js/react.js"></script>
<script src="assets/js/react-dom.js"></script>
<script src="assets/js/browser.js"></script>
<script src="assets/data/imageDatas.js"></script>
<script src="assets/js/Photowall2.js" type="text/babel"></script>
</body>
</html>
