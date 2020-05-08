<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class THANHTOAN extends Model
{
	public $table = 'thanhtoan';
    protected $fillable = 
    [
        'kh_id',
		'bds_id',
		'sotien',
    ];
}
