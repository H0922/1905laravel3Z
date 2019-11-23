@extends('layouts.app')
@section('title', '联系人添加')
@section('content')
<body>
<form action="{{url('/contacts/store')}}" method="post">
    <h3>联系人添加</h3>
    <br>
    <table>
        @csrf
        <tr class="table-info">
            <td scope="row"><h5>联系人基本信息</h5></td>
        </tr>
        <tr>
            <td>客户单位:</td>
            <td><input type="text" name="con_danwei"></td>
        </tr>
        <tr>
            <td>联系人职位:</td>
            <td><input type="text" name="con_zhiwei"></td>
        </tr>
        <tr>
            <td>联系人姓名:</td>
            <td><input type="text" name="con_name"></td>
        </tr>
        <tr>
            <td>联系人性别:</td>
            <td>
                <select name="con_sex">
                    <option value="1" name="con_sex">男</option>
                    <option value="2" name="con_sex">女</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>生日:</td>
            <td><input type="text" name="con_bir"></td>
        </tr>
        <tr>
            <td>爱好:</td>
            <td><input type="text" name="con_ai"></td>
        </tr>

        <tr class="table-info">
            <th scope="row"><h5>联系方式</h5></th>
        </tr>
        <tr>
            <td>家庭邮编:</td>
            <td><input type="text" name="con_code"></td>
        </tr>
        <tr>
            <td>家庭住址:</td>
            <td><input type="text" name="con_zhuzhi"></td>
        </tr>
        <tr>
            <td>工作电话:</td>
            <td><input type="text" name="con_gtel"></td>
        </tr>
        <tr>
            <td>家庭电话:</td>
            <td><input type="text" name="con_htel"></td>
        </tr>
        <tr>
            <td>手机:</td>
            <td><input type="text" name="con_tel"></td>
        </tr>
        <tr>
            <td>EMAIL:</td>
            <td><input type="text" name="con_email"></td>
        </tr>
        <tr>
            <td>QQ号码:</td>
            <td><input type="text" name="con_qq"></td>
        </tr>

        <tr class="table-info">
            <th scope="row"><h5>备注</h5></th>
        </tr>
        <tr>
            <td>备注1:</td>
            <td><textarea name="con_bei1"></textarea></td>
        </tr>
        <tr>
            <td>备注2:</td>
            <td><textarea name="con_bei2"></textarea></td>
        </tr>
        <tr>
            <td>
                <input type="submit"value="添加">
                <input type="reset" value="清空">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<script>

    //鼠标点击出现爱心特效
    (function(window,document,undefined){
        var hearts = [];
        window.requestAnimationFrame = (function(){
            return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimationFrame ||
                function (callback){
                    setTimeout(callback,1000/60);
                }
        })();
        init();
        function init(){
            css(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: absolute;}.heart:after{top: -5px;}.heart:before{left: -5px;}");
            attachEvent();
            gameloop();
        }
        function gameloop(){
            for(var i=0;i<hearts.length;i++){
                if(hearts[i].alpha <=0){
                    document.body.removeChild(hearts[i].el);
                    hearts.splice(i,1);
                    continue;
                }
                hearts[i].y--;
                hearts[i].scale += 0.004;
                hearts[i].alpha -= 0.013;
                hearts[i].el.style.cssText = "left:"+hearts[i].x+"px;top:"+hearts[i].y+"px;opacity:"+hearts[i].alpha+";transform:scale("+hearts[i].scale+","+hearts[i].scale+") rotate(45deg);background:"+hearts[i].color;
            }
            requestAnimationFrame(gameloop);
        }
        function attachEvent(){
            var old = typeof window.onclick==="function" && window.onclick;
            window.onclick = function(event){
                old && old();
                createHeart(event);
            }
        }
        function createHeart(event){
            var d = document.createElement("div");
            d.className = "heart";
            hearts.push({
                el : d,
                x : event.clientX - 5,
                y : event.clientY - 5,
                scale : 1,
                alpha : 1,
                color : randomColor()
            });
            document.body.appendChild(d);
        }
        function css(css){
            var style = document.createElement("style");
            style.type="text/css";
            try{
                style.appendChild(document.createTextNode(css));
            }catch(ex){
                style.styleSheet.cssText = css;
            }
            document.getElementsByTagName('head')[0].appendChild(style);
        }
        function randomColor(){
            return "rgb("+(~~(Math.random()*255))+","+(~~(Math.random()*255))+","+(~~(Math.random()*255))+")";
        }
    })(window,document);


</script>
@endsection