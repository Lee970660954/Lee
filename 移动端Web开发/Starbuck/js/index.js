$(function(){
    $header = $("#header");
    $(window).on('scroll',function(){
            var bFlag = true;//bFlag��ʶλ��true��ʾ��ʱ�ǹ̶���λ��false��ʾ��ʱ�Ǿ��Զ�λ��
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
        selector : "#carousel",//��ʾ�ֲ�ͼ��ʾ��λ��
        imgs : imgArr1,//��ʾ��ʾ��ͼƬ
        buttonStyle : "circle",//square ��ʾ��������ʽ
        arrowPos : "bottom",//center ��ʾǰ��ť��λ��
        speed : 500//��ʾͼƬ�ֻ����ٶ�
    };
    var carousel1 = new Carousel();
    carousel1.init(settings1);
})