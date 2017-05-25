<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>购物车</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/shopping_cart.css">
</head>
<body>
<?php include 'header.php'?>

<div class="row wrapper">
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">全部商品（js）</a></li>
    </ul>
    <div class="product_list_submenu">
    </div>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"></li>
    </ul>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"></li>
    </ul>
    <div class="shopping_sum_price ">
        <label><input type="checkbox" name="" value="全选">全选</label>
        <button type="button" class="btn btn-default navbar-btn">结算</button>
        <span class="shopping_sum_price_">共（）件&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;总价：（）</span>
    </div>
</div>
<div id="footer">
    <div class="footer-top">
        <ul class="footer-list">
            <li><a href="javascript:">ABOUT</a></li>
            <li><a href="javascript:">MEN'S</a></li>
            <li><a href="javascript:">MEN'S ACCESSORIES</a></li>
            <li><a href="javascript:">WOMEN'S</a></li>
            <li><a href="javascript:">WOMEN'S ACCESSORIES</a></li>
        </ul>
        <ul class="footer-list">
            <li><a href="javascript:">STORE LOCATOR</a></li>
            <li><a href="javascript:">FAQs</a></li>
            <li><a href="javascript:">CODES</a></li>
            <li><a href="javascript:">ICONS</a></li>
            <li><a href="javascript:">CONTACT</a></li>
        </ul>
        <ul class="footer-list">
            <li><a href="javascript:">40019 Parma Via</a></li>
            <li><a href="javascript:">Sant'Agata Bolognese</a></li>
            <li><a href="javascript:">BO,Italy</a></li>
            <li><a href="javascript:">1234567</a></li>
            <li><a href="javascript:">970660954@qq.com</a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p class="footer-author">Web designer：Leeyj</p>

        <p class="footer-mobile">Mobile:15046658648</p>

        <p class="footer-email">Email:970660954@qq.com</p>
        <ul class="footer-icon nav nav-pills">
            <li role="presentation" class="active"><a href="javascript:"><i class="fa fa-facebook-official fa-2x"
                                                                            aria-hidden="true"></i></a></li>
            <li role="presentation"><a href="javascript:"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
            </li>
            <li role="presentation"><a href="javascript:"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
            </li>
            <li role="presentation"><a href="javascript:"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
            </li>
            <li role="presentation"><a href="javascript:"><i class="fa fa-weibo fa-2x" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>
<script id="cart-tpl" type="text/html">
    <div class="shopping_list_container">
        <input type="checkbox" name="shopping_selected" class="shopping_selected">

        <div class="col-xs-3 col-md-3">
            <a href="#" class="thumbnail">
                <img src="{{img}}" alt="...">
            </a>
        </div>
        <a href="javascript:void(0)" class="detalis_title col-xs-3 col-md-3">{{description}}</a>
        单价</br><span class="shopping_price">{{price}}</span>

        <div class="shopping_num ">
            数量</br>
            <input type="number" value="{{quantity}}">
        </div>
        总价</br><span class="shopping_sum "></span>

        <div class="shopping_handel ">
            <span>删除</span></br>
            <span>收藏</span>
        </div>
    </div>
</script>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/template.js"></script>
<script src="assets/js/shopping_cart.js"></script>
</html>