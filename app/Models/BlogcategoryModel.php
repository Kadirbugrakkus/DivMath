<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogcategoryModel extends Model
{
    use HasFactory;
    protected $table='blogcategory';

    public function categoryCount()
    {
        return $this->hasMany(BlogModel::class, 'category_id', 'id');
    }
}
