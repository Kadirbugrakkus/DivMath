<?php

namespace App\Providers;

use App\Models\AboutModel;
use App\Models\BlogModel;
use App\Models\PortfolioModel;
use App\Models\TeamsModel;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $aboutData=AboutModel::all();
        View::share('aData', $aboutData);

        $pImage= DB::table('portfolio')->select('image')->take(4)->get();
        View::share('pData',$pImage);

        Paginator::useBootstrap();
        View::share('paginator');

        $blogRecent = Blogmodel::orderBy('created_at','DESC')->take(3)->get();
        View::share('blogHome',$blogRecent);

        $portCount = DB::table('portfolio')->latest('id')->first();
        View::share('portHome',$portCount);

        $aboutTeam = TeamsModel::all();
        View::share('aboutTeam',$aboutTeam);
    }
}
