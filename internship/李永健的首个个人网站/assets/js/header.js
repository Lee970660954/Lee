$(function(){
   function init(){
      $('.header-skin li').each(function(index,elem){
         $(this).css('background-position',-index*20+"px 0");
      });
   };
   init();
   $('.header-skin li').on('click',function(){
      init();
      $(this).css('background-position',-20*$(this).index()+"px -15px");
      $('.skin').attr('class','skin').addClass('skin'+$(this).index());
      //$('.header-s1').attr('class','skin').addClass('skin'+$(this).index(),'');
      //$('.header-menu a').hover(function(){
      //   $(this).css({color:orange});
      //})65
      //$('#footer li').css({'color':'#ffffff'})
   })
});