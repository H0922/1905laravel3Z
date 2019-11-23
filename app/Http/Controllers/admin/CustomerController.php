<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Models\ContactsModel;
use App\Models\ClienModel;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $where=[];

        $name = request()->cli_name;
        if($name){
            $where[] = ['cli_name','like',"%$name%"];
        }

        $con_name = request()->con_name;
        if($con_name){
            $where[] = ['con_name','like',"%$con_name%"];
        }

        $date = request()->date;
        if($date){
            $where[] = ['date','like',"%$date%"];
        }

        $data = CustomerModel::where($where)->paginate(2);

        $query = request()->all();
        return view('admin/customer/index',['data'=>$data,'query'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obj = new ContactsModel;
        $data = $obj->select('con_name')->get();

        $cli = new ClienModel;
        $clien = $cli->select('cli_name')->get();
        //dd($clien);
        return view('admin.customer.add',['data'=>$data,'clien'=>$clien]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $post = CustomerModel::create($data);
       // dd($post);
        if($post){
            return redirect('admin/customer/index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CustomerModel::findorFail($id);
        return view('admin/customer/show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = new ContactsModel;
        $con = $obj->select('con_name')->get();

        $cli = new ClienModel;
        $clien = $cli->select('cli_name')->get();

        $data = CustomerModel::find($id);
        //dd($data);
        return view('admin/customer/edit',['data'=>$data,'con'=>$con,'clien'=>$clien]);
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
         $data = CustomerModel::findorFail($id);
        //dd($data);exit;
            $post = request()->all();
            //dd($post);exit;
               $data->type = $request->type;
               $data->date = $request->date;
               $data->cli_name = $request->cli_name;
               $data->con_name = $request->con_name;
               $data->estimated = $request->estimated;
               $data->cost = $request->cost; 
               $data->content = $request->content; 
               $data->degree = $request->degree;
               $data->opinion = $request->opinion; 
               $data->remark = $request->remark; 

               $bool = $data->save();
          // dd($bool);exit;
            if($data){
                return redirect('admin/customer/index');
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CustomerModel::find($id)->delete($id);
        if($data){
            return redirect('admin/customer/index');
        }

    }
}
