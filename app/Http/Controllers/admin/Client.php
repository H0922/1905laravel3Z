<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client as cli;

class Client extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $where=[];
            $cli_name=request()->cli_name;
            if($cli_name){
                $where[]=['cli_name','like',"%$cli_name%"];
            }
            $cli_encode=request()->cli_encode;
            if($cli_encode){
                $where[]=['cli_encode','=',"$cli_encode"];
            }
            $area=request()->area;
            if($area){
                $where[]=['area','=',"$area"];
            }
            $private=request()->private;
            if($private){
                $where[]=['private','=',"$private"];
            }
            $type=request()->type;
            if($type){
                $where[]=['type','=',"$type"];
            }
            $sales=request()->sales;
            if($sales){
                $where[]=['sales','=',"$sales"];
            }
            $enterprise=request()->enterprise;
            if($enterprise){
                $where[]=['enterprise','=',"$enterprise"];
            }
            $industry=request()->industry;
            if($industry){
                $where[]=['industry','=',"$industry"];
            }
        $res=cli::where($where)->paginate(3);
        $query=request()->all();
        return view('admin.client.index',['res'=>$res,'query'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=$request->except('_token');
        // dd($post);
        $res=cli::create($post);
        if($res){
            return redirect('client/index');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res=cli::find($id);
        return view('admin.client.edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=$request->except('_token');
        $data=cli::where('cli_id','=',$id)->update($post);
        return redirect('client/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=cli::destroy($id);
        if($res){
            return redirect('client/index');
        }
    }
}
