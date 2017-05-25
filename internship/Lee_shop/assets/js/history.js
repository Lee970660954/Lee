/**
 * Created by Lenovo on 2017/5/17.
 */
$(function () {
    $prodId = $('.prodId');
    $(".btn-info").on('click',function () {
        $(".con-res").show();
    });
    $(".con-fot .btn-warning").on('click',function () {
        var data = confirm("确认要删除吗？");
        if(data){
            $.get('users/delete_order',{
                order_id:this.value
            },function(data){
                if(data == 'success'){
                    $(".con-info").remove();
                }else{
                    alert('删除失败！')
                }
            },'text');

        }else{
            return false;
        }

    });
    $(".con-res .send").on('click',function(){
        $.get('users/insert_comment',{
            prod_id:$prodId.val(),
            comment:$(this).siblings('textarea').val()
        },function(data){
            if(data=='success'){
                alert('评论成功！')
            }else{
                alert('评论失败！')
            }

        },'text');
    });

});
