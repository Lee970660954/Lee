define(function(require,exports,module){
    function Leaf(options){
        this.width = options.width;
        this.left = options.left;
        this.oImg = new Image();
        this.oImg.src = "assets/images/" + parseInt(Math.random()*4 +1) + ".png";
        this.oImg.width = this.width;
        this.oImg.style.left = this.left + "px";
        options.container.appendChild(this.oImg);
    };
    Leaf.prototype.fall=function(){
        var that = this;
        var lTimer = setInterval(function(){

            that.oImg.style.top = that.oImg.offsetTop + 5 + "px";
            //console.log(that.oImg.offsetTop);
            //console.log(document.body.clientHeight)
            if(that.oImg.offsetTop >= document.body.clientHeight){
                clearInterval(lTimer);
                that.oImg.style.display = 'none'
            }
        },Math.random()*100);

    };
    module.exports = Leaf;

});