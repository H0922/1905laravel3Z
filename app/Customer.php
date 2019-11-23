<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
    public $primaryKey='con_id';

    protected $table='customer ';

    public $timestamps=false;


    //白名单表设计中允许为空的
//    protected $fillable=[''];
    //黑名单表设计中允许为空的
    protected $guarded = [''];

}