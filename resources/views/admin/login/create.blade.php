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
                    <h1 class="card-title">注册页面</h1>
                    <h3 class="card-subtitle">1905phpA</h3>
                 
                    <form class="form-horizontal m-t-30"  action="{{url('login/ins')}}" method="post">
                        @csrf
                            <div class="form-group">
                                    <label><span class="help">用户名 <i class="m-r-10 mdi mdi-arrow-down"></i> <i class="m-r-10 mdi mdi-arrow-down"></i></span></label>
                                    <input type="text" class="form-control" name="user_name" placeholder="在这里输入您的用户名">
                                </div>
                            <div class="form-group">
                                    <label><span class="help">您的邮箱<i class="m-r-10 mdi mdi-arrow-down"></i> <i class="m-r-10 mdi mdi-arrow-down"></i></span></label> 
                                    <input type="email" id="example-email" name="user_email" class="form-control" placeholder="在这里输入那您的Emai">
                            </div>
                            <div class="form-group">
                                    <label><span class="help">您的密码<i class="m-r-10 mdi mdi-arrow-down"></i> <i class="m-r-10 mdi mdi-arrow-down"></i></span></label> 
                                
                                    <input type="password" class="form-control" name="user_pwd" placeholder="在这里输入您的密码">
                            </div>
                            <div class="form-group">
                                    <div class="col-sm-12">
                                      <input type="submit" value="点击注册" class="btn btn-default active">
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
@endsection