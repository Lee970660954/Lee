<?php
    $loginedUser = $this->session->userdata('loginedUser');
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lee's photowall1</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/Photowall.css"/>
</head>
<body>
    <?php include'logined_header.php';?>
    <div id="photowall"></div>
    <?php include'footer.php';?>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/react.js"></script>
    <script src="assets/js/react-dom.js"></script>
    <script src="assets/js/browser.js"></script>
    <script src="assets/data/imageDatas.js"></script>
    <script src="assets/js/Photowall1.js" type="text/babel"></script>
</body>
</html>