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
  <div class="panel panel-default"> 
  <div class="panel-heading">
    <h3 class="pandl-title">客户详情</h3>
  </div>
  <div class="panel-body">
    <table class="table">
      <tr>
        <td>id</td>
        <td>{{$data->id}}</td>
      </tr>

      <tr>
        <td>客户名称</td>
        <td>{{$data->cli_name}}</td>
      </tr>

      <tr>
        <td>联系人</td>
        <td>{{$data->con_name}}</td>
      </tr>

      <tr>
        <td>预估成本</td>
        <td>{{$data->estimated}}</td>
      </tr>

      <tr>
        <td>时间成本</td>
        <td>{{$data->cost }}</td>
      </tr>

      <tr>
        <td>内容描述</td>
        <td>{{$data->content}}</td>
      </tr>

      <tr>
        <td>满意度</td>
        <td>{{$data->degree  }}</td>
      </tr>

      <tr>
        <td>意见</td>
        <td>{{$data->opinion  }}</td>
      </tr>


      <tr>
        <td>备注</td>
        <td>{{$data->remark }}</td>
      </tr>
    </table>
  </div>
</div>

</body>
</html>
@endsection