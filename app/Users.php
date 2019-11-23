<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $primaryKey='user_id';

    //绑定表名
  protected $table='users';

  //关闭时间戳
   public $timestamps=false;

   //黑名单
   protected $guarded=[];
}
