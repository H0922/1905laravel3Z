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
</head>
<body>
<a href="{{ url('admin/customer/add') }}"><button type="button" class="btn btn-primary btn-lg btn btn-dark">添加</button>
</a>
	
	<form action="">
		客户名称:<input type="text" name="cli_name" value="{{ $query['cli_name']??'' }}" placeholder="请输入客户名称">
		联系人:<input type="text" name="con_name " value="{{ $query['con_name ']??'' }}" placeholder="请输入联系人">
		日期:<input type="date" name="date">
		<button  class="btn btn-dark">搜索</button>
	</form>

  <table class="table table-dark table-hover">
    	<thead>  
    	  	<tr align="center">
    	  		<td><h4>编号</h4></td>
	    		<td><h4>客户名称</h4></td>
	    		<td><h4>服务类型</h4></td>
	    		<td><h4>服务日期</h4></td>
	    		<td><h4>服务内容</h4></td>
	    		<td><h4>联系人</h4></td>
	    		<td><h4>操作</h4></td>
    		</tr>
    	</thead>

    	@foreach($data as $v)
    	<tbody>  
    	  	<tr align="center">
    	  		<td>{{ $v->id }}</td>
	    		<td>{{ $v->cli_name }}</td>
	    		<td>{{ $v->type  }}</td>
	    		<td>{{ $v->date }}</td>
	    		<td>{{ $v->content }}</td>
	    		<td>{{ $v->con_name }}</td>
	    		<td>
	    			<a href="{{ url('admin/customer/edit',['id'=>$v->id])}}" class="btn btn-primary">编辑</a>
	    			<a href="{{ url('admin/customer/show',['id'=>$v->id])}}" class="btn btn-success">详情</a>
	    			<a href="{{ url('admin/customer/destroy',['id'=>$v->id])}}" class="btn btn-danger">删除</a>
	    		</td>
    		</tr>
    	</tbody>
    	@endforeach
    </table>
         {{ $data->appends($query)->links() }}
</body>
</html>
@endsection