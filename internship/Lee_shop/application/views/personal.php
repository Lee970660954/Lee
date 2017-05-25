<?php $loginedUser = $this -> session -> userdata('loginedUser')?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>My Personal</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/personal.css"/>
	
</head>
<body>
 	<?php include 'header.php'?>
    <div id="banner">
        <div id="per-left">
            <img src="<?php echo $loginedUser -> portrait?>" alt="..." class="img-thumbnail center-block">
        </div>
        <div id="per-right">
            <form  id="per-form" action="users/update_personal" method="POST">
                <div class="per-name">
                    <label class="">nickname:<span><?php echo $loginedUser -> username?></span></label>
                </div>
                <div class="per-name">
                    <label for="eml" class="">Email:</br><input type="text" id="eml" placeholder="<?php echo $loginedUser -> email?>" name="email" ></label>
                </div>
                <div class="per-name">
                    <label for="pwd" class="">Password:</br><input type="password" name="pass" id="pwd" placeholder="Password"  ></br></br>
                    <input type="password" placeholder="Confirm Password" id="pwd1">
                    </label>
                <div class="personal-pass-advice">两次密码输入不一致</div>
                </div>
                <div class="per-name">
                    <label for="mobile" class="">Mobile: </br><input type="text" id="mobile" placeholder="<?php echo $loginedUser -> mobile?>"  name="mobile"></label>
                </div>

                <div class="">
                        <button type="submit" class="btn btn-default">reset</button>
                </div>
            </form>
            </div>
    </div>
    <div id="list">
        <div class="arrow">
            <span id="prev">&lt;</span>
        </div>
        <div id="container">
        <?php foreach ($results as $index => $result){?>
                 <a href="users/confirm/<?php echo $result -> prod_id?> " style="z-index: <?php echo count($index)-$index?>" >
                     <div class="list-sub">
                         <div class="c-left">
                             <img src="<?php echo $result -> img_src?>" alt="..." class="list-img " >
                         </div>
                         <div class="c-right">
                             <h2>历史详情</h2>
                             <h3>name:<?php echo $result -> prod_name?></h3>
                             <strong>price：<?php echo $result -> prod_price?></strong></br>
                             <strong>sum price：<?php echo $result -> total_money?></strong></br>
                             <strong>num：*<?php echo $result -> quantity?></strong></br>
                             <p>addr:河北</p>
                         </div>
                     </div>
                 </a>
        <?php }?>
<!--                  <a href="" >
    <div class="list-sub">
        <div class="c-left">
            <img src="assets/uploads/products/womens2.jpg" alt="..." class="img-thumbnail list-img img-responsive" >
        </div>
        <div class="c-right">
            <h2>历史详情</h2>
            <h3>name:222</h3>
            <strong>price：$380</strong>
            <p>addr:河北</p>

        </div>
    </div>
</a>
<a href="" >
    <div class="list-sub">
        <div class="c-left">
            <img src="assets/uploads/products/womens3.jpg" alt="..." class="img-thumbnail list-img img-responsive" >
        </div>
        <div class="c-right">
            <h2>历史详情</h2>
            <h3>name:333</h3>
            <strong>price：$380</strong>
            <p>addr:河北</p>

        </div>
    </div>
</a>
<a href=""  >
    <div class="list-sub">
        <div class="c-left">
            <img src="assets/uploads/products/womens5.jpg" alt="..." class="img-thumbnail list-img img-responsive">
        </div>
        <div class="c-right">
            <h2>历史详情</h2>
            <h3>name:444</h3>
            <strong>price：$380</strong>
            <p>addr:河北</p>

        </div>
    </div>
</a> -->
        </div>

        <div class="arrow">
            <span id="next">&gt;</span>
        </div>

    </div>

    <?php include 'footer.php'?>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/personal.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>