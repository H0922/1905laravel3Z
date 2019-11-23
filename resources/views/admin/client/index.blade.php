@extends('layouts.app')
@section('title', '牛逼八个6')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<a href="{{url('client/create')}}">添加客户</a>
<h1 style="text-align:center" class="text-danger" >客户列表</h1>
<form action="">
        <input type="text" name="cli_name" placeholder="请输入客户名称" value="{{$query['cli_name']??''}}">
        <input type="text" name="cli_name" placeholder="请输入客户编码" value="{{$query['cli_encode']??''}}">
        <input type="text" name="cli_name" placeholder="请输入地区" value="{{$query['area']??''}}">
        <input type="text" name="cli_name" placeholder="请输入客户来源" value="{{$query['private']??''}}">
        <br>
        <input type="text" name="cli_name" placeholder="请输入客户类型" value="{{$query['type']??''}}">
        <input type="text" name="cli_name" placeholder="请输入销售方式" value="{{$query['sales']??''}}">
        <input type="text" name="cli_name" placeholder="请输入企业性质" value="{{$query['enterprise']??''}}">
        <input type="text" name="cli_name" placeholder="请输入企业属性" value="{{$query['industry']??''}}">
        <button class="btn btn-primary">搜索</button>
</form>
    <!-- <table border="1">
        <tr>
            <th>ID</th>
            <th>客户名称</th>
            <th>客户编码</th>
            <th>地区</th>
            <th>客户来源</th>
            <th>客户类型</th>
            <th>销售方式</th>
            <th>企业性质</th>
            <th>企业属性</th>  
            <th>操作</th>
        </tr>
        @foreach ($res as $v)
        <tr>
            <th>{{$v->cli_id}}</th>
            <th>{{$v->cli_name}}</th>
            <th>{{$v->cli_encode}}</th>
            <th>{{$v->area}}</th>
            <th>{{$v->private}}</th>
            <th>{{$v->type}}</th>
            <th>{{$v->sales}}</th>
            <th>{{$v->enterprise}}</th>
            <th>{{$v->industry}}</th> 
            <th>
                <a href="{{url('client/destroy/'.$v->cli_id)}}">删除</a>
                <a href="{{url('client/edit/'.$v->cli_id)}}">修改</a>
            </th> 
        </tr>
        @endforeach
    </table> -->
    <div class="table-responsive">
    <table class="table">
                                    <thead class="thead-light">
                                        <tbody>
                                            <th scope="col">ID</th>
                                            <th scope="col">销售员</th>
                                            <th scope="col">客户名称</th>
                                            <th scope="col">客户编码</th>
                                            <th scope="col">地区</th>
                                            <th scope="col">客户来源</th>
                                            <th scope="col">客户类型</th>
                                            <th scope="col">销售方式</th>
                                            <th scope="col">企业性质</th>
                                            <th scope="col">企业属性</th>  
                                            <th scope="col">操作</th>
                                        </tbody>
                                        @foreach ($res as $v)
                                        <tr>
                                            <th scope="col">{{$v->cli_id}}</th>
                                            <th scope="col">{{$v->user_name}}</th>
                                            <th scope="col">{{$v->cli_name}}</th>
                                            <th scope="col">{{$v->cli_encode}}</th>
                                            <th scope="col">{{$v->area}}</th>
                                            <th scope="col">{{$v->private}}</th>
                                            <th scope="col">{{$v->type}}</th>
                                            <th scope="col">{{$v->sales}}</th>
                                            <th scope="col">{{$v->enterprise}}</th>
                                            <th scope="col">{{$v->industry}}</th>
                                            <th scope="col">
                                                <a href="{{url('client/destroy/'.$v->cli_id)}}">删除</a>
                                                <a href="{{url('client/edit/'.$v->cli_id)}}">修改</a>
                                            </th>
                                        </tr>
                                        @endforeach
                                    </thead>
                                </table>
                            </div>                                    
</body>
</html>
{{$res->appends($query)->links()}}

@endsection


                            