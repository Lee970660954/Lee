<?php
$loginUser = $this -> session -> userdata('loginUser');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Myshop</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
</head>
<body>
<!--注册弹出层-->
    <?php include 'regist.php'?>
    <?php include 'header.php'?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="assets/uploads/products/slide-1.jpg" alt="...">
                <div class="carousel-caption">
                    欢迎来到Mr.Lee的小店，愿您购物愉快
                </div>
            </div>
            <div class="item">
                <img src="assets/uploads/products/slide-2.jpg" alt="...">
                <div class="carousel-caption">
                    欢迎来到Mr.Lee的小店，愿您购物愉快
                </div>
            </div>
            <div class="item">
                <img src="assets/uploads/products/slide-3.jpg" alt="...">
                <div class="carousel-caption">
                    欢迎来到Mr.Lee的小店，愿你购物愉快
                </div>
            </div>
            <div class="item">
                <img src="assets/uploads/products/slide-4.jpg" alt="...">
                <div class="carousel-caption">
                    欢迎来到Mr.Lee的小店，愿您购物愉快
                </div>
            </div>
            <div class="item">
                <img src="assets/uploads/products/slide-5.jpg" alt="...">
                <div class="carousel-caption">
                    欢迎来到Mr.Lee的小店，愿您购物愉快
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left fa fa-arrow-circle-left fa-4x" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right fa fa-arrow-circle-right fa-4x" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="product-list">
        <!--<img class="background-img" src="assets/img/background1.jpg" alt="加载中..."/>-->
        <div id="product-nav" class="clearfix">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="javascript:" data-hit="1">Best seller for men</a></li>
                <li role="presentation"><a href="javascript:" data-hit="2">Best seller for women</a></li>
                <li role="presentation"><a href="javascript:" data-hit="3">Best seller for children</a></li>
            </ul>
        </div>
        <div class="row product-list">
            <div class="loading"><img src="assets/img/loading.png" alt="加载中"/></div>
        </div>
    </div>
    <div class="loadmore">
        <img src="assets/img/loadmore.png" alt="">
    </div>
    <div id="advertisement">
        <div class="advertisement-content">
            <div class="advertisement-brand">
                <h1>“我们不追随潮流，我们引领潮流”</h1>
                <sapn>Mr.Lee（ 李永健）</sapn>
                <p><a class="advertisement-btn" href="">Click here to catch more about Lee</a>!</p>
            </div>
        </div>
       <div class="advertisement-content">
           <div class="advertisement-brand">
               <h1>“我们不做代码的搬运工，我们争做勤劳的Pioneer”</h1>
               <sapn>Mr.Lee（ 李永健）</sapn>
               <p><a class="advertisement-btn" href="">Click here to catch more about Lee</a>!</p>
           </div>
       </div>
       <div class="advertisement-content">
           <div class="advertisement-brand">
               <h1>“Do more，no "BB"!”</h1>
               <sapn>Mr.Lee（ 李永健）</sapn>
               <p><a class="advertisement-btn" href="">Click here to catch more about Lee</a>!</p>
           </div>
       </div>
    </div>
    <?php include 'footer.php'?>
<!-- 登录 -->
    <?php include 'login.php'?>
    <script id="product-tpl" type="text/html">
        <div class="col-sm-6 col-md-4 product-item">
            <div class="thumbnail product-info">
                <img src="{{img}}" alt="...">
                <div class="caption">
                    <h3 class="product-name">{{name}}</h3>
                    <p class="product-price">${{price}}</p>
                    <input type="text" class="quantity" value="1">
                    <p><a href="javascript:" class="btn btn-primary add-cart">ADD</a> <a href="product/detail/{{id}}" class="btn btn-default" role="button">DETAILS</a></p>
                </div>
            </div>
        </div>
    </script>
<a href="product/cart" style="visibility: hidden;"><span class="shopping-cart-btn-rel" >购物车</span></a>
<a href="users/personal" style="visibility: hidden;"><span class="index-personal-rel" >个人中心</span></a>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>
