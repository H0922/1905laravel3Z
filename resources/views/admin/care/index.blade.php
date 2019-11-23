<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>生日祝福</title>
</head>
<body>
      <h1>本月生日客户(2019年11月)</h1>
      <table border="1">
          <tr>
              <td>id</td>
              <td>选择</td>
              <td>客户名称</td>
              <td>联系人姓名</td>
              <td>性别</td>
              <td>QQ/MSM</td>
              <td>工作电话</td>
              <td>手机</td>
              <td>电子邮件</td>
          </tr>
          @php $i=1 @endphp
          @foreach ($data as $v)
              <tr  @if($i%2==0)class="active" @else class="success" @endif>
                  <td>{{$v->con_id}}</td>
                  <td><input type="checkbox"></td>
                  <td>{{$v->con_danwei}}</td>
                  <td>{{$v->con_name}}</td>
                  <td>@if ($v->con_sex==1)男@endif @if ($v->con_sex==2)女 @endif</td>
                  <td>{{$v->con_qq}}</td>
                  <td>{{$v->con_htel}}</td>
                  <td>{{$v->con_tel}}</td>
                  <td>{{$v->con_email}}</td>
              </tr>
              @php $i++ @endphp
          @endforeach
          <tr>
              <td colspan="9">
                  <input type="checkbox" >全选
                  <button>发送短信</button>
              </td>

          </tr>
      </table>
      {{$data->appends($query)->links()}}
</body>
</html>