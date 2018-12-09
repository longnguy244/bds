<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HOADON extends Model
{
    protected $table = 'hoadon';
    protected $guarded = [];
    protected $timestamp = true;
    public $route = 'hoadon';
}
