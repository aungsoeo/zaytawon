<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    protected $fillable = ['title', 'main_category_id', 'sub_category_id', 'short_description', 'feature_photo', 'attach_file', 'detail_description', 'detail_photo', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'custom_field5'];

    public function Category(){
		return $this->belongsTo('App\Model\Category', 'main_category_id');
	}

	public function SubCategory(){
		return $this->belongsTo('App\Model\Category', 'sub_category_id');
	}

	public static function getDatesForCalender(){

		$arr = self::select('title', 'custom_field5 AS start')->where('custom_field5', '>', date("Y-m-d"))->where('main_category_id',9)->get();
		return $arr;
	}
}