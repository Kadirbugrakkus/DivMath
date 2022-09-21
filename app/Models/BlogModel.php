<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='blogcontent';

    public function getCategory()
    {
        return $this->hasOne('App\Models\BlogCategoryModel','id','category_id');
    }

    public function getAuthor()
    {
        return $this->hasOne('App\Models\TeamsModel','id','author_id');
    }


}
