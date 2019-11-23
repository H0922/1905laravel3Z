@extends('layouts.app')
@section('title', '牛逼八个6')
@section('content')

   <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <h1 class="card-title">登录页面</h1>
                    <h3 class="card-subtitle">1905phpA</h3>
                
                    <form class="form-horizontal m-t-30" action="{{url('login/login')}}" method="post">
                        @csrf
                            <div class="form-group">
                                    <label><span class="help">用户名 </span></label>
                                    <input type="text" class="form-control" name="user_name" value="" placeholder="输入您的用户名">
                                </div>
                            <div class="form-group">
                                    <label><span class="help">您的密码</span></label> 
                                    <input type="password" class="form-control"name="user_pwd" placeholder="输入您的密码">
                            </div>
                            <div class="form-group">
                                    <div class="col-sm-12">
                                      <input type="submit" value="点击登录" class="btn btn-default active">
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
@endsection