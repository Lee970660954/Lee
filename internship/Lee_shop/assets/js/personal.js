
var oPrev = document.getElementById("prev");
var oNext = document.getElementById("next");
var oCon = document.getElementById("container");
var aList = oCon.getElementsByTagName("a");
var iNow = 0;
aList[0].className ="show";
oPrev.onclick = oNext.onclick = function(){
    if(this == oNext){
        aList[iNow].className = "hide";
        iNow++;
        if(iNow == aList.length){
            iNow = 0;
        }
        aList[iNow].className = "show";
    }else{
        aList[iNow].className = "hide";
        iNow--;
        if(iNow == -1){
            iNow = aList.length - 1;
        }
        aList[iNow].className = "show";
    }
};
$(function(){
    var Product = function (id, name, price, img, quantity,addr) {
        this.id = id;
        this.name  = name;
        this.price = price;
        this.img = img;
        this.quantity = 1;
        this.addr = addr;
    };
    var prodComp={
        init: function(){
            var _this = this;
            this.loadData();//先加载一批数据

        },
        loadData : function(){
            $.get('users/get_products', param, function (data) {
                for(var i=0; i<data.products.length; i++){
                    var products = data.products;
                    var product = new Product(products[i].prod_id, products[i].prod_name, products[i].prod_price, products[i].prod_img);
                    var productHtml = template('product-tpl', product);
                    var $product = $(productHtml);
                    $('#container').append($product);
                }
                callback && callback();
            }.bind(this), 'json');

        }
    }
});