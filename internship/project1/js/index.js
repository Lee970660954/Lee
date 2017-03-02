require(['carousel'],function(Carousel){
    var img1 = ['images/carousel1.jpg','images/carousel2.jpg','images/carousel3.jpg']
    var settings1 ={
        width:1000,
        height:600,
        imgs:img1,
        selector:"#carousel-container",
        tabform:"circle",
        arrowsform:"leftBottom",
        speed:2000
    };
    var carousel1 = new Carousel();
    carousel1.init(settings1);
});