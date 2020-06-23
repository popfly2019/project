<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\Admin\Config;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $columns = Config::select("name","value")->get();
        foreach($columns as $key=>$value)
        {
        	$config[$value['name']] = $value['value'];
        }

        $article = DB::table('article')->orderBy('id','desc')->limit(5)->get();
        view()->share([
            "config"    =>$config,
            "article"   =>$article
            ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
