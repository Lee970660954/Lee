<?php $loginedUser = $this -> session -> userdata('loginedUser')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>My History</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/history.css"/>
</head>
<body>
<?php include 'header.php'?>
<div id="content" class="wrap">
    <div class="con-info">
        <div class="con-nav">
            <div class="con-nav-left">Witch Store:LY Store</div>
            <div class="con-nav-right"></div>
        </div>
        <div class="con-text">
            <div class="con-text-left">
                <img src="<?php echo $rows->img_src;?>" alt="">
            </div>
            <div class="con-text-moddle">
                <strong><?php echo $rows->prod_description;?></strong>
                <h4>女装 短款 圆领</h4>
            </div>
            <div class="con-text-right">
                <strong>$<?php echo $rows->total_money?></strong>
                <h3><?php echo $rows->quantity;?></h3>

            </div>
        </div>
        <div class="con-fot">
            <button type="button" class="btn btn-info">评价商品</button>
            <button type="button" class="btn btn-warning" value="<?php echo $rows -> order_id;?>">删除订单</button>
        </div>
        <div class="con-res" style="display: none">
            <textarea name=""   rows="5" autofocus="autofocus" ></textarea>
            <input type="text" class="prodId" value="<?php echo $rows -> prod_id;?>" style="visibility: hidden">
            <button type="button" class="btn send" >发送</button>
        </div>
    </div>


</div>
<div id="container" class="wrap">
    <div id="con-title"><span>看了又看</span></div>
    <div id="example">
        <ul>
            <li><a href="">jacket</a><img src="assets/uploads/products/womens5.jpg" alt=""></li>
            <li><a href="">jeans</a><img src="assets/uploads/products/womens2.jpg" alt=""></li>
            <li><a href="">shirt</a><img src="assets/uploads/products/womens1.jpg" alt=""></li>
            <li><a href="">jewelry</a><img src="assets/uploads/products/womens3.jpg" alt=""></li>
            <li><a href="">scarf</a><img src="assets/uploads/products/womens6.jpg" alt=""></li>
        </ul>
    </div>
</div>


<?php include 'footer.php'?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/history.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>