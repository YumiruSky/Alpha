<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>@yield('title')</title>
    <link  href="{{ asset('/css/weui.css')}}" rel="stylesheet" type="text/css">
    <link  href="{{ asset('/css/shop.css')}}" rel="stylesheet" type="text/css">
</head>
<body>

@yield('content')
<!-菜单栏>
<div class="bk_toptips"><span></span></div>
<div id="global_menu" onclick="onMenuClick()">
    <div></div>
</div>
<div id="actionSheet_wrap">
    <div class="weui-mask_transparent" id="mask"></div>
    <div class="weui-actionsheet" id="weui-actionsheet">
        <div class="weui-actionsheet__menu">
            <div class="weui-actionsheet__cell" onclick="onMenuItemClick(1)">用户中心1</div>
            <div class="weui-actionsheet__cell" onclick="onMenuItemClick(2)">用户中心2</div>
            <div class="weui-actionsheet__cell" onclick="onMenuItemClick(3)">用户中心3</div>
            <div class="weui-actionsheet__cell" onclick="onMenuItemClick(4)">用户中心4</div>
        </div>
        <div class="weui-actionsheet__action">
            <div class="weui-actionsheet__cell" id="actionsheet_cancel">取消</div>
        </div>
    </div>
</div>

</body>
<script src="{{asset('/js/jquery-3.2.1.js')}}" ></script>
<script>
    function hideActionSheet(weuiActionsheet,mask){
        weuiActionsheet.removeClass('weui_actionsheet_toggle');
        mask.removeClass('weui_fade_toggle');
        weuiActionsheet.on('transitionend',function(){
            mask.hide();
        }).on('webkitTransitionEnd',function(){
            mask.hide();
        })
    }

    function onMenuClick(){
        var mask=$('#mask');
        var weuiActionsheet=$('#weui-actionsheet');
        weuiActionsheet.addClass('weui_actionsheet_toggle');
        mask.show().addClass('weui_fade_toggle').click(function(){
            hideActionSheet(weuiActionsheet,mask);
        });
        $('#actionsheet_cancel').click(function(){
            hideActionSheet(weuiActionsheet,mask);
        });
        weuiActionsheet.unbind('transitionend').unbind('webkitTransitionEnd');

    }

    function onMenuItemClick(index){
        var mask=$('#mask');
        var weuiActionsheet=$('#weui-actionsheet');
         hideActionSheet(weuiActionsheet,mask);
        if(index==1){

        }
//        elseif(index==2){
//
//        }elseif(index==3){
//
//        }
             else{
            $('.bk_toptips').show();
            $('.bk_toptips span').html("敬请期待！");
            setTimeout(function () {
                $('.bk_toptips').hide();
            },200)
        }
    }
</script>
@yield('my-js')

</html>