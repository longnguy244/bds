<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CHUSOHUU extends Model
{
	public $route = 'chusohuu';
	protected $table = 'chusohuu';
        protected $fillable = 
        [
			'id',
			'ten',
			'sdt',
			'email',
			'diachi',
			'cmnd',
        ];
        
        public  $rules =
        [
			'ten' => 'requỉed',
			'sdt' => 'requỉed',
			'email' => 'requỉed',
			'diachi' => 'requỉed',
			'cmnd' => 'requỉed',
        ];

        public $messages = 
        [
			'ten.required'       => 'Trường tên không được để trống',
			'sdt.required'    	=> 'Trường số điện thoại không được để trống',
			'email.required'     	=> 'Trường email không được để trống',
			'cmnd.required'    => 'Trường Số chứng minh nhân dân không được để trống',
        ];
}
