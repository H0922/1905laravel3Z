<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Users as Mu;

use function JmesPath\search;

class Login extends Controller
{
    //登录展示页面
        public function index(){
            return view('admin.login.index');
        }

        //登录执行
        public function login(){
           $data=request()->except('_token');
           $name=$data['user_name'];
           $pwd=$data['user_pwd'];
            $link=Mu::where('user_name',$name)->first();
            // dd($link['user_id']);
            // dd($name);
            if(Hash::check($pwd,$link['user_pwd'])){
                session(['login'=>$name]);
                session(['user_id'=>$link['user_id']]);
                return redirect('/');
            }
            
           
        }

        //注册展示页面
        public function create(){
            return view('admin.login.create');
        }
        //注册执行
        public function ins(){
           $data=request()->except('_token');
            $data['user_pwd']=Hash::make($data['user_pwd']);
           $res=Mu::insert($data);
           if($res){
                return redirect('login/index');
           }    

        }




}
