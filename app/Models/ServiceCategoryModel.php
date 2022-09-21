<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ServiceCategoryModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'servicecategory';

    public function getServiceContent()
    {
        return $this->belongsTo(ServiceContentModel::class,'id','servicesId');
    }

}
