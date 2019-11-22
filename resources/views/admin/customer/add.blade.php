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
    <h1>
    	新建客户服务记录<a href="{{ url('admin/customer/index') }}"><button type="button" class="btn btn-primary btn-lg btn btn-dark">列表</button>
</a>
    </h1>
        <form action="{{ url('admin/customer/store') }}" method="post">
        @csrf
        	<table>
				<div class="form-group">
					<label for=""><h4>客户服务基本信息:</h4></label>		    			
	    		</div>

	        	<div class="form-group">
    			    <label for="type" >服务类型:</label>	    
    				<select name="type" id="">
						<option value="上门服务">上门服务</option>
						<option value="解决客户投诉">解决客户投诉</option>
						<option value="客户培训">客户培训</option>
					</select>
				</div>

				<div class="form-group">
			      <label for="date">服务日期:</label>
			      <input type="date" class="form-control" id="date" placeholder="请输入管理员名称" name="date">
			    </div>

				<div class="form-group">
			      <label for="cli_name">客户名称:</label>
			      <input type="text" class="form-control" id="cli_name" placeholder="请输入客户名称" name="cli_name" value="{{old('cli_name')}}">
			    </div>

				<div class="form-group">
			      <label for="con_name">联系人:</label>
			      <input type="text" class="form-control" id="con_name" placeholder="请输入联系人" name="con_name" value="{{old('con_name')}}">
			    </div>

				<div class="form-group">
			      <label for="estimated">服务预估成本:</label>
			      <input type="text" class="form-control" id="estimated" placeholder="请输入预估成本" name="estimated" value="{{old('estimated')}}">
			    </div>

				<div class="form-group">
			      <label for="cost">时间成本:</label>
			      <input type="text" class="form-control" id="cost" placeholder="请输入时间成本" name="cost" value="{{old('cost')}}">
			    </div>
			
				<div class="form-group">
			      <label for="content">服务内容描述:</label>
					<textarea name="content" id="" cols="30" rows="1" placeholder="请输入内容描述" class="form-control" value="{{old('content')}}"></textarea>
			    </div>




				<div class="form-group">
	    				<label for=""><h4>客户反馈:</h4></label> 			
	    		</div>

				<div class="form-group">
	        			<label for="degree">客户满意度:</label>	    
	        				<select name="degree" id="">
	    						<option value="很满意">很满意</option>
	    						<option value="比较满意">比较满意</option>
	    						<option value="不满意">不满意</option>
	    					    <option value="很不满意">很不满意</option>
	    					</select>
	  				</div>


				<div class="form-group">
			      <label for="opinion">客户反馈意见:</label>
					<textarea name="opinion" id="" cols="30" rows="1" placeholder="请输入反馈意见" class="form-control" value="{{old('opinion')}}"></textarea>
			    </div>


				<div class="form-group">
					<label for=""><h4>描述:</h4></label>
	    		</div>

				<div class="form-group">
			      <label for="remark">备注:</label>
					<textarea name="remark" id="" cols="30" rows="1" placeholder="请输入备注" class="form-control" value="{{old('remark')}}"></textarea>
			    </div>

				<button type="submit" class="btn btn-primary btn-lg btn btn-dark">保存</button>
        	</table>
    	</form>
</body>
</html>
@endsection