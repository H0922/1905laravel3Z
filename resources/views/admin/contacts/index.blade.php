@extends('layouts.app')
@section('title', '联系人展示')
@section('content')
<body>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">联系人展示</h4>
        </div>
        <form action="">
            <input type="text" name="word" value="{{$query['word']??''}}" placeholder="请输入姓名关键字"><button>搜索</button>
        </form>
        <a href="/contacts/create">联系人添加</a>
        <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                    <th>联系人ID</th>
                    <th>客户名称</th>
                    <th>联系人姓名</th>
                    <th>性别</th>
                    <th>QQ</th>
                    <th>工作电话</th>
                    <th>手机</th>
                    <th>电子邮件</th>
                    <th>操作</th>
                </tr>
             </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach($data as $v)
                        <tr @if($i%2==0) class="table-danger" @else class="table-info" @endif>
                            <td>{{$v->con_id}}</td>
                            <td>{{$v->con_danwei}}</td>
                            <td>{{$v->con_name}}</td>
                            <td>@if($v->con_sex==1) 男 @else 女 @endif</td>
                            <td>{{$v->con_qq}}</td>
                            <td>{{$v->con_gtel}}</td>
                            <td>{{$v->con_tel}}</td>
                            <td>{{$v->con_email}}</td>
                            <td><a href="{{url('contacts/edit/'.$v->con_id)}}">编辑</a>|<a href="{{url('contacts/delete/'.$v->con_id)}}">删除</a> </td>
                        </tr>
                     @php $i++ @endphp
                     @endforeach
                </tbody>
            </table>
            {{--分页--}}
            {{$data->appends($query)->links()}}
        </div>
    </div>
</div>
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