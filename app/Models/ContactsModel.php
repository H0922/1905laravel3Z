<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    protected $table = "Contacts";
    protected $primaryKey = "con_id";

    // protected $fillable = [
				// 		'type',
				// 		'date',
				// 		'cli_name',
				// 		'con_name',
				// 		'estimated',
				// 		'cost',
				// 		'content',
				// 		'degree',
				// 		'opinion',
				// 		'remark',
    // 					  ];
}
