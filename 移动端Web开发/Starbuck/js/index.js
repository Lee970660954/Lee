$(function(){
    $header = $("#header");
    $(window).on('scroll',function(){
            var bFlag = true;//bFlag标识位，true表示此时是固定定位，false表示此时是绝对定位；
            if(bFlag && $(this).scrollTop() >200){
                $header.css({
                        position:"static"
                    }
                );
            }else{
                $header.css({
                        position:"fixed"
                    }
                );
            };
            bFlag = !bFlag;
        }

    )
});
require(["carousel"],function(Carousel){
    var imgArr1 = ["img/1.jpeg", "img/2.jpeg", "img/3.jpg", "img/4.jpg"];
    var settings1 = {
        selector : "#carousel",//表示轮播图显示的位置
        imgs : imgArr1,//表示显示的图片
        buttonStyle : "circle",//square 表示索引的样式
        arrowPos : "bottom",//center 表示前后按钮的位置
        speed : 500//表示图片轮换的速度
    };
    var carousel1 = new Carousel();
    carousel1.init(settings1);
})