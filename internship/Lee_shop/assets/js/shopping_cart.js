//$(function(){
//    $cartProd = $('.shopping_list_container');
//    $prodSum = $('.shopping_sum');
//    $cartContainer = $('.product_list_submenu');
//    var $cartTotalMoney = 0;
//    //console.log($cartProd.length);
//    for(var i=0;i<$cartProd.length;i++){
//        var $prodPrice = $('.shopping_price')[i];
//        //console.log($prodPrice)
//        var $prodQuantity = $('.shopping_num>input')[i];
//        var $totalMoney = parseInt($prodPrice.innerHTML)*$prodQuantity.value;
//        //console.log($totalMoney);
//        $prodSum[i].innerHTML = $totalMoney;
//    }
//    $cartContainer.on('change','.shopping_list_container>input',function(){
//        $cartTotalMoney += $(this)
//        console.log($cartTotalMoney)
//    })
//
//});
$(function(){//购物车组件，采用面向对象的思想，将购物车页面看做一个对象，在这个对象中封装购物车对象的属性和方法；
    var Cart = function (id, name, price, img, quantity,description) {
        this.id = id;
        this.name  = name;
        this.price = price;
        this.img = img;
        this.quantity = quantity;
        this.description = description
    };
    var cartComp = {
        $cartList : $('.product_list_submenu'),
        cartArr :[],
        init : function(){;
            this.loadData();
        },
        loadData : function(){
            var _this = this;
            var param = {user_id : 1};
            $.get('product/get_cart',{user_id:1},function(data){
                if(data){
                    for (var i=0;i<data.cartList.length;i++){
                        var cartList = data.cartList[i];
                        var cart = new Cart(cartList.prod_id,cartList.prod_name,cartList.prod_price,cartList.prod_img,cartList.quantity,cartList.prod_description);
                        //console.log(cart);
                        var cartHtml = template('cart-tpl',cart);
                        var $cart = $(cartHtml);
                        $cart.data('info-data',cart);
                        _this.$cartList.append($cart);
                        _this.cartArr.push(cart);
                        //console.log(_this.$cartList);
                        //console.log(_this.cartArr)
                    }
                    $listContainer = $('.shopping_list_container');
                    $prodSum = $('.shopping_sum');
                    $cartContainer = $('.product_list_submenu');
                    var $listTotalMoney = 0;
                    //console.log($cartProd.length);
                    for(var i=0;i<$listContainer.length;i++){
                        var $prodPrice = $('.shopping_price')[i];
                        //console.log($prodPrice)
                        var $prodQuantity = $('.shopping_num>input')[i];
                        //console.log($prodQuantity);
                        var $listTotalMoney = parseInt($prodPrice.innerHTML)*$prodQuantity.value;
                        //console.log($totalMoney);
                        $prodSum[i].innerHTML = $listTotalMoney;
                        //console.log($listTotalMoney)
                    }
                    //$cartContainer.on('change','.shopping_list_container>input',function(){
                    //    var $singleTotalMoney = parseInt($(this).val()*$prodPrice);
                    //    var $singleParents = $(this).parents('.shopping_list_container');
                    //    console.log($singleParents);
                    //})
                }else{
                    alert('您的购物车为空，请添加商品！')
                }
            },'json');
        },

    };
    cartComp.init();
});