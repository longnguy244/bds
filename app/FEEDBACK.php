<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FEEDBACK extends Model
{
    protected $table = 'feedbacks';
    protected $guarded = [];
    protected $timestamp = true;
    public $route = 'feedback';
}
