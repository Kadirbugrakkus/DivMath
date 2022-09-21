<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $aboutData = AboutModel::all();
        return view('frontend.about',compact('aboutData'));
    }
}
