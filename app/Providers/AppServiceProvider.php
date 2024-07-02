<?php

namespace App\Providers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $homesliders=DB::table('sliders')->where('position_id',10)->get();
       
        View::share('homesliders',$homesliders);
    }

    public function index()
    {
       $homesliders = Slider::where('position_id', 9)->get(); // جلب البيانات باستخدام Eloquent
        dd( $homesliders);
      return view('frontend.inc.slider', compact('homesliders'));
   }

    
    public function boot(): void
    {
        //
    }
}
