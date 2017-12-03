<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';

    protected $fillable = ['title', 'description', 'parent_id', 'main_or_sub'];

    public function Categories(){
		return $this->hasMany('App\Model\Category', 'parent_id');
	}
	
	public function ParentCategory(){
		return $this->belongsTo('App\Model\Category', 'parent_id');
	}
	public function post()
	{
		return $this->hasMany('App\Model\Post','sub_category_id');
	}
}
