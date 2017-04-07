<?php
    $loginedUser = $this->session->userdata('loginedUser');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $loginedUser -> username; ?> 's Zone</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/carousel.css"/>
</head>
<body class="skin">
    <?php include'logined_header.php';?>
    <div id="body">
        <div class="wrapper">
            <div class="my-mood"></div>
        </div>
    </div>
    <div id="album-carousel-main" class="album-carousel-main skin">
        <div class="wrapper">
            <div id="album-carousel"></div>
        </div>
    </div>
    <?php include 'footer.php';?>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/require.js" data-main="assets/js/index"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/textbox.js"></script>
    <!--<script>-->
        <!--$('.journal-main-wordpad').wysiwyg();-->
    <!--</script>-->
</body>
</html>