<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table = "customer";
    protected $primaryKey = "id";

    protected $fillable = [
						'type',
						'date',
						'cli_name',
						'con_name',
						'estimated',
						'cost',
						'content',
						'degree',
						'opinion',
						'remark',
    					  ];
}
