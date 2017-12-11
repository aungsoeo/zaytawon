<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table = 'gallery';

       protected $fillable = ['title', 'main_category_id', 'sub_category_id', 'short_description', 'file'];
}
