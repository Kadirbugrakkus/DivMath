<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioModel;
use Illuminate\Support\Facades\DB;


class PortfolioController extends Controller
{
    public function portfolio()
    {
        $portfolio = PortfolioModel::all(); //listeleme düzeltilecek
        return view('frontend.portfolio',compact('portfolio'));
    }
}
