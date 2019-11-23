<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contacts;
class ContactsController extends Controller
{
    //联系人展示
    public function index(){
        //分页
        $pageSize=config('app.pageSize');
        //搜索
        $word=request()->word;
        $where=[];
        if($word){
            $where[]=['con_name','like',"%$word%"];
        }

        $data=Contacts::where($where)->paginate(2);
        $query=request()->all();
        return view('admin.contacts.index',['data'=>$data,'query'=>$query]);
    }


    //联系人添加
    public function create(){
        return view('admin.contacts.create');
    }

    //执行添加
    public function store(Request $request)
    {
        $post=$request->except('_token');
        $contacts=Contacts::create($post);
        if($contacts->con_id){
            return redirect('/contacts/index');
        }
    }


    //删除
    public function delete($id)
    {

        if(!$id){
            abort(404);
        };
        $res=Contacts::destroy($id);
        if($res){
            return redirect('/contacts/index');
        }
    }


    //编辑
    public function edit($id)
    {
        if(!$id){
            return;
        }
        $data=Contacts::where('con_id',$id)->first();
        return view('admin.contacts.edit',['data'=>$data]);
    }

    //执行编辑
    public function update(Request $request, $id)
    {
        $post=$request->except('_token');
        Contacts::where('con_id',$id)->update($post);
        return redirect('/contacts/index');
    }

}
