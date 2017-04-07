require.config({
    paths:{
        "jquery":'jquery-1.12.4'
    }
});
define(['jquery'],function($){
    var oVideo = document.getElementsByName('video');
    function Marquee(){
        this.defaultSettings = {
            width:250,
            height:100,
            arrs:['H','E','L','L','O',' ','L','E','E'],
            selector:"#header-marquee",
            speed:500
        };
        this.marqueeContainer = $('<div class="marquee-container"></div>');
    };
    Marquee.prototype.init = function(options){
        var _this = this;
        $.extend(this.defaultSettings,options);
        this.marqueeContainer.css({
            "width":_this.defaultSettings.width,
            "height":_this.defaultSettings.height,
        });
        //var arr =['H','E','L','L','O',',','M','Y',' ','F','R','I','E','N','D' ];
        var arr = _this.defaultSettings.arrs;
        var newArr = [];
        function show(){
            _this.timer = setInterval(function(){
                var letter = arr.shift();
                newArr.push(letter)
                _this.marqueeContainer.html(newArr);
               if(arr.length == 0){
                   clearInterval(_this.timer)
               }
                //console.log(123)
            },100);
        };
        show();
        $(this.defaultSettings.selector).append(this.marqueeContainer);
    }
    return Marquee;
});