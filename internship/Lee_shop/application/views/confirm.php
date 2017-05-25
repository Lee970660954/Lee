<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Confirm Order</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/confirm.css"/>
</head>
<body>
<?php include 'header.php'?>
<div id="addr" class="clearfix">
   <div id="user-info">
       <span>Username：xxx</span>
       <span>Tel:130-1900-7503</span>
   </div>
    <div id="address">UserAddress：黑龙江省哈尔滨市</div>
</div>
<div id="scroll"></div>
<div id="order">
    <div class="order-info">
        <div class="order-nav">
            Witch Store:LY Store
        </div>
        <div class="order-text">
            <div class="order-text-left">
                <img src="assets/uploads/products/womens5.jpg" alt="">
            </div>
            <div class="order-text-moddle">
                <strong>2017春季新款长衫</strong>
                <h4>颜色分类：浅蓝色，尺寸：L</h4>
            </div>
            <div class="order-text-right">
                <strong>￥380</strong>
                <h3>X1</h3>

            </div>
        </div>
    </div>
    <div class="order-info">
        <div class="order-nav">
            Witch Store:LY Store
        </div>
        <div class="order-text">
            <div class="order-text-left">
                <img src="assets/uploads/products/womens2.jpg" alt="">
            </div>
            <div class="order-text-moddle">
                <strong>2017春季新款牛仔裤</strong>
                <h4>颜色分类：浅蓝色，尺寸：L</h4>
            </div>
            <div class="order-text-right">
                <strong>￥270</strong>
                <h3>X1</h3>

            </div>
        </div>
    </div>

</div>
<div id="bargin">
    <ul class="list-group">
        <li class="list-group-item list-group-item-success">配送方式：快递 免邮</li>
        <li class="list-group-item list-group-item-info">运险费：确认收货前按原价90%退款</li>
        <li class="list-group-item list-group-item-warning">买家留言：<input type="text" placeholder="对本次交易的说明"></li>
        <!--<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>-->
    </ul>
</div>
<div id="order-fot">
    <span>合计：</span><span id="order-cash">￥650</span>
    <button type="button" class="sub">提交订单</button>
    <?php include 'footer.php'?>
</div>
</body>
</html>