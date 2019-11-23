<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加客户信息</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form class="form-horizontal" role="form" method="post" action="{{url('client/update/'.$res->cli_id)}}">
@csrf
    <h1 style="text-align:center" class="text-danger" >客户信息添加</h1>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b style="color:blue"  >基本信息</b>
	<div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">销售员</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="inputPassword" name="" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">
			是否为共享用户
		</label>
		&nbsp;&nbsp;&nbsp;
		<div class="btn-group" data-toggle="buttons">
			@if ($res->cli_share==1)
			<label class="btn btn-primary">
				<input type="radio" name="cli_share" value="1" checked> 是
			</label>
			<label class="btn btn-primary">
				<input type="radio" name="cli_share" value="2"> 否
			</label>
			@else
			<label class="btn btn-primary">
				<input type="radio" name="cli_share" value="1"> 是
			</label>
			<label class="btn btn-primary">
				<input type="radio" name="cli_share" value="2" checked> 否
			</label>
			@endif
		</div>				
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">客户名称</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->cli_name}}"  id="inputPassword" name="cli_name" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">客户编码</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->cli_encode}}"  id="inputPassword" name="cli_encode" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">客户简称</label>
		<div class="col-sm-8">
			<input type="text" class="form-control"  value="{{$res->cli_me}}" id="inputPassword" name="cli_me" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">电话</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->tel}}"  id="inputPassword" name="tel" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">网址</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->url}}"  id="inputPassword" name="url" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">地区</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->area}}"  id="inputPassword" name="area" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">传真</label>
		<div class="col-sm-8">
			<input type="text" class="form-control"  value="{{$res->facsimile}}" id="inputPassword" name="facsimile" >
		</div>
	</div>   
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">电子邮件</label>
		<div class="col-sm-8">
			<input type="text" class="form-control"  value="{{$res->email}}" id="inputPassword" name="email" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">邮政编码</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->zip}}"  id="inputPassword" name="zip" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">详细地址</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->address}}"  id="inputPassword" name="address" >
		</div>
	</div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b style="color:blue"  >客户类型</b>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">客户来源</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->private}}"  id="inputPassword" name="private" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">客户类别</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->type}}"  id="inputPassword" name="type" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">销售方式</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->sales}}"  id="inputPassword" name="sales" >
		</div>
	</div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b style="color:blue"  >企业概况</b>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">行业属性</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->industry}}"  id="inputPassword" name="industry" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">企业性质</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" value="{{$res->enterprise}}"  id="inputPassword" name="enterprise" >
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">企业描述</label>
		<div class="col-sm-8">
        <textarea name="desc" class="form-control"  id="inputWarning">{{$res['desc']}}</textarea>
		</div>
	</div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b style="color:blue"  >备注</b>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">备注1</label>
		<div class="col-sm-8">
        <textarea name="remarka" class="form-control" id="inputWarning">{{$res['remarka']}}</textarea>
		</div>
	</div>
    <div class="form-group">
		<label for="inputPassword" class="col-sm-2 control-label">备注2</label>
		<div class="col-sm-8">
        <textarea name="remarkb" class="form-control" id="inputWarning">{{$res['remarkb']}}</textarea>
		</div>
	</div>
    <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10" >
			<input type="submit" class="btn btn-danger" value="修改">
		</div>
	</div>
</form>
</body>
</html>