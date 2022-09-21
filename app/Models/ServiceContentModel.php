<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceContentModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'servicescontent';
    public function getServices()
    {
        return $this->hasOne('App\Models\ServicesCategoryModel', 'id', 'servicesId');
    }

}
