<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MESSAGE extends Model
{
    protected $table = 'message';
    protected $fillable = ['message'];

    public function user()
    {
        return $this->belongsTo(KHACHHANG::class,'user_id','id');
    }
}
