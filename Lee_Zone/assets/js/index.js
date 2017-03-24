require(['marquee',"leaf",'carousel'],function(Marquee,Leaf,Carousel){
    var arr1 = ['H','E','L','L','O',' ','M','Y',' ','F','R','I','E','N','D']
    //var arr = [];
    var settings1 = {
        width:250,
        height:100,
        arrs:arr1,
        selector:"#header-marquee",
        speed:1000
    };
    var marquee1 = new Marquee();
    marquee1.init(settings1);
    //var oContainer = document.getElementById('journal');
    var arr2 = ['ʵ','ϰ','��','Ҳ','��','��','��','~','~','~']
    var settings2 = {
        width:400,
        height:200,
        arrs:arr2,
        selector:".my-mood",
        speed:2000
    };
    var marquee2 = new  Marquee();
    marquee2.init(settings2)

    var oContainer = body;
    var winWidth = document.documentElement.clientWidth;
    var winHeight = document.body.clientHeight;
    //console.log(winHeight);
    //console.log(oContainer);
    for(var i = 0;i<10;i++){
        var iWidth = 50+parseInt(Math.random()*51);
        var leaf = new Leaf({
            width:iWidth,
            left:Math.random()*(winWidth-iWidth),
            container:oContainer
        });
        leaf.fall();

    }
    var imgs1 = ['assets/images/170310031.png','assets/images/17031008.png','assets/images/17031009.jpg','assets/images/17031007.jpg']
    var settings1 = {
        width:800,
        height:500,
        imgs:imgs1,
        selector:"#album-carousel",
        tabform:"circle",
        arrowsform:"center",
        speed:1000
    }
    var carousel1 = new Carousel();
    carousel1.init(settings1);
});
//require(["leaf"],function(Leaf){
//    var oContainer = document.getElementById('container');
//    var winWidth = document.documentElement.clientWidth;
//    //console.log(oContainer);
//    for(var i = 0;i<4;i++){
//        var iWidth = 50+parseInt(Math.random()*51);
//        var leaf = new Leaf({
//            width:iWidth,
//            left:Math.random()*(winWidth-iWidth),
//            container:oContainer
//        });
//        leaf.fall();
//    }
//
//});
