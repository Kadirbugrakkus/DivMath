<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ServiceContentModel;
use App\Models\ServiceCategoryModel;


class ServicesController extends Controller
{
    public function service()
    {
        $serviceCategory = ServiceCategoryModel::all();
        return view('frontend.services', compact('serviceCategory'));
    }
    public function serviceDetails($categorySlug)
    {
        $serviceCategory = ServiceCategoryModel::whereSlug($categorySlug)->first();
        $serviceDetailsCategory = ServiceCategoryModel::all();
        return view('frontend.servicedetails',
        [
            'serviceCategory'=>$serviceCategory,
            'serviceDetailsCategory'=>$serviceDetailsCategory
        ]);
    }

}
