<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     //主键id
     public $primaryKey='cli_id';

     //设置表名
     protected $table='client';
 
     //设置时间戳
     public $timestamps=false;
 
     //黑名单
     protected $guarded=[];
}
