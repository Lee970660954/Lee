<?php
$loginedUser = $this -> session -> userdata('loginedUser');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>详情</title>
	<base href="<?php echo site_url(); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<link rel="stylesheet" href="assets/css/style.css"/>
	<link rel="stylesheet" href="assets/css/bootstrap.css"/>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets/css/index.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/details.css">
</head>
<body>
<?php include 'regist.php'?>
<?php include 'header.php'?>
<div class="wrapper">
	<div class="details_container">
		<div class="details_img_container">
			<img src="<?php echo $this_detail -> img_src?>" alt="..." class="details_img">
			<div class="big_details_img"></div>
		</div>
		<div class="details_content">
			<span class="details_content_title"><?php echo $this_detail -> prod_description?></span></br></br>
			<span class="details_content_price">单价<?php echo $this_detail -> prod_price?></span></br></br>
			<div href="#" class="details_content_pay">立即购买</div>
			<div href="#" class="details_content_add">加入购物车</div>
		</div>
	</div>
	<div class="details_setimate">
		<div class="details_setimate_title"><div></div><span>累计评论(<?php echo count($details) ?>)</span></div>
		<?php foreach($details as $detail){?>
		<div class="setimate_container">
			<div class="setimate_inf">
				<div class="setimate_head">
					<img src="assets/img/Leslie.jpg" alt="...">
				</div>
				<div class="setimate_user"><?php echo $detail -> username ?></div>
			</div>
			<div class="setimate_content">
				<div class="setimate"><?php echo $detail -> comm_content?></div>
				<span class="setimate_time">评论时间:<?php echo $detail -> comm_date?></span>
			</div>
		</div>
		<?php }?>
	</div>
</div>
<?php include 'footer.php'?>
<?php include 'login.php'?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>