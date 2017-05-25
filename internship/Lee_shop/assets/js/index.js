$(function(){//文档就绪函数
    var prodComponent = (function(){//商品组件
        var Product = function(id,name,price,img,quantity){//将商品封装成类；
            this.id = id;
            this.name = name;
            this.price = price;
            this.img = img;
            this.quantity = 1;
        };
        var productArr = [];
        var prodMethod = {//将商品的处理方法封装在一个功能对象中；
            $loading : $('.loading'),
            $loadMore : $('.loadmore'),
            $productList : $('.product-list'),
            pageNo : 1,
            isEnd: false,
            isLoaded : false,
            init : function(){//商品功能初始化方法，在页面一加载的时候被调用
                var _this = this;
                this.loadData();//先加载一批初始化数据
                this.$loadMore.on("click",function(){
                    _this.loadMore();
                    //console.log(_this.$productList)
                });
                this.$productList.on('click','.add-cart',function(){
                    var productInfo = $(this).parents('.product-item').data('info-data');
                    productInfo.quantity = $(this).parent().prev().val();
                    //console.log(productInfo);
                    _this.addCart(productInfo);
                })

                $('.reg_reg').on('click',function(){
                    $('.reg_container').css('display','block');
                    $('body').css('overflow-y','hidden');//禁止显示滚动条
                    window.onmousewheel=document.onmousewheel=function(){
                        return false;
                    };
                });
                $('.submit').on('click',function(){
                    $('.reg_pass1').trigger('blur');
                    $('.reg_pass2').trigger('keyup');
                    if(bFlag && $('.reg_pass1').val()!=''){
                        $('#msform').submit();
                        $('.reg_container').css('display','none');
                    }else{
                        return false;
                    }
                });
                $('.reg_username').on('blur',function(e,param){
                    if(this.value==""){
                        $('.advice1').css('display','block') ;
                        bFlag = false;
                        return false;
                    }else{
                        $('.advice1').css('display','none') ;
                        $.get('users/check_name',{
                            uname:this.value
                        },function(data){
                            if(data == 'true'){
                                $('.advice1-1').css('display','none');
                            }else{
                                $('.advice1-1').css('display','block');
                            }
                        },'text');
                        bFlag = true;
                    }
                });
                /*判断密码是否为空*/
                $('.reg_pass1').on('blur',function(e,param){
                    if(this.value==""){
                        $('.advice3').css('display','block') ;
                        bFlag = false;
                        return false;

                    }else{
                        $('.advice3').css('display','none') ;
                        bFlag = true;
                    }
                });
                /*判断两次密码输入是否相同*/
                $('.reg_pass2').on('keyup',function(e,param){
                    if(this.value!=$('.reg_pass1').val()){
                        $('.advice4').css('display','block') ;
                        bFlag = false;
                        return false;

                    }else{
                        $('.advice4').css('display','none') ;
                        bFlag = true;
                    }
                });
                // 登陆
                $('.login').on('click',function(){
                    $('.login_dialog').css('display','block');
                    $('body').css('overflow-y','hidden');//禁止显示滚动条
                    window.onmousewheel=document.onmousewheel=function(){
                        return false;
                    };
                });
                $('.login_username').on('blur',function(){
                    if(this.value ==""){
                        $('.login_advice3').css('display','block');
                    }else{
                        $('.login_advice3').css('display','none');
                        $.get('users/check_login_name',{
                            username:this.value
                        },function(data){
                            if(data == 'true'){
                                $('.login_advice2').css('display','none');
                                bFlag1 = true;
                            }else{
                                $('.login_advice2').css('display','block');
                                bFlag1 = false;
                            }
                        },'text');
                    }
                });
                $('.login_pass').on('blur',function(){
                    if(this.value ==""){
                        $('.login_advice4').css('display','block');
                    }else{
                        $('.login_advice4').css('display','none');
                    }
                });
                $('.login_dialog_close').on('click',function(){
                    $('.login_dialog').css('display','none');
                    $('body').css('overflow-y','scroll');//显示滚动条
                    window.onmousewheel=document.onmousewheel=function(){
                        return true;
                    };
                });
                $('.login_dialog_btn').on('click',function(event){
                    if(bFlag1 && $('.login_username').val()!="" && $('.login_pass').val()!=""){
                        $.get('users/login',{
                            uname:$('.login_username').val(),
                            pass:$('.login_pass').val()
                        },function(data){
                            if(data == 'true'){
                                $('.login_dialog').css('display','none');
                                $('body').css('overflow-y','scroll');//显示滚动条
                                window.onmousewheel=document.onmousewheel=function(){
                                    return true;
                                };
                                $('.reg_login').css('display','none');
                                $('.reg_reg').css('display','none');
                            }else{
                                $('.login_advice').css('display','block');
                            }
                        },'text')
                    }else if($('.login_username').val()==""){
                        $('.login_advice3').css('display','block');
                    }else if($('.login_pass').val()==""){
                        $('.login_advice4').css('display','block');
                    }
                });
                $('.shopping-cart-btn').on('click',function(){
                    $.get('users/check_session',{},function(data){
                        if(data == 'true'){
                            //$('.shopping-cart-btn-rel').click();
                            location.href = 'product/cart';
                        }else{
                            $('.login').trigger('click');
                        }
                    },'text');
                });
                /*退出*/
                //$('.reg_quit').on('click',function(){
                //    $.get('users/clear_session',{},function(){},'text');
                //});
                /*personal*/
                $('.reg-personal').on('click',function(){
                    $.get('users/check_session',{},function(data){
                        if(data == 'true'){
                            //$('.index-personal-rel').click();
                            location.href = 'users/personal';
                        }else{
                            $('.login').trigger('click');
                        }
                    },'text');
                });

            },
            loadData : function(option){
                //var param = {page : this.pageNo};
                var param = $.extend({page: this.pageNo}, option);
                this.$loading.show();
                $.get('product/get_products',param,function(data){
                    for(var i = 0;i<data.products.length;i++){
                        //console.log(data)
                        var products = data.products[i];
                        var product = new Product(products.prod_id,products.prod_name,products.prod_price,products.prod_img);
                        //console.log(product)
                        productArr.push(product);
                        //console.log(productArr)
                        var productHtml = template('product-tpl', product);
                        var $product = $(productHtml);
                        $product.data('info-data', product);
                        this.$productList.append($product);
                    }
                    this.$loading.hide();
                    this.$loadMore.show();
                    this.isLoaded = true;
                    this.isEnd = data.isEnd;
                }.bind(this),'json');
            },
            loadMore : function(){
                if(this.isEnd){
                    alert('很抱歉，您已经浏览完店家所有商品，我们会马上增加商品的');
                    this.$loadMore.css('visibility',"hidden");
                    return;
                }
                if (this.isLoaded){
                    this.pageNo++;
                    this.isLoaded = false;
                    this.loadData();
                }
            },
            clear: function () {
                productArr = [];
                this.pageNo = 1;
                this.$productList.empty();
            },
            addCart : function(productInfo){
                //console.log(productInfo)
                $.get('users/check_session',{},function(data){
                    if(data == 'true'){
                        $.get('product/add_cart',{productInfo : productInfo},function(data){
                            if(data == "success"){
                                alert("商品已添加到购物车");
                            }else{
                                alert("您已经购买过该商品，请到购物车中查看");
                            }
                        },'text')
                    }else{
                        //alert('123');
                        $('.login').trigger('click');
                    }
                },'text');
            }
        };
        return prodMethod;
    })();//函数立即调用
    prodComponent.init();
    var navComponent = (function(){//导航栏组件
        var navMethod = {//导航栏功能对象
            init : function(){
                var _this = this;
                $('#nav .class-menu a').on('click',function(){
                    _this.prodCate = $(this).data('cate');
                    prodComponent.clear();
                    prodComponent.loadData({
                        cateId : _this.prodCate
                    });
                    prodComponent.$loadMore.css('visibility',"hidden");
                });
                $('#product-nav a').on('click',function(){
                    _this.hitId = $(this).data('hit');
                    prodComponent.clear();
                    prodComponent.loadData({
                        hitId : _this.hitId
                    })
                    prodComponent.$loadMore.css('visibility',"hidden");
                })
                //_this.$loadMore.hide();

            }
        }
        return navMethod;
    })()
    navComponent.init();
});