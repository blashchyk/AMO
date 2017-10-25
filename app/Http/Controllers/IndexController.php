<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unification;
use App\Goods;
use App\Cooperation;
use App\Bisnes;
use App\Purses;
use App\umbrella;
use App\Belts;
use App\Scarves;
use App\Decoration;
use App\Clock;
use App;
use App\Editing;
use App\HeaderBanner;



class IndexController extends Controller
{
    
    public function execute($locale = 'it'){
        $editing = Editing::all();
      
       App::setLocale($locale);
        $locale = App::getLocale();

        $unifications = Unification::all();
        $goods = Goods::all();
        $cooperations = Cooperation::all();
        $bisnes = Bisnes::all();
        $purses = Purses::all();
        $umblellas = umbrella::all();
        $belts = Belts::all();
        $scarves = Scarves::all();
        $decorations = Decoration::all();
        $clocks = Clock::all();
        $banner = HeaderBanner::all()->where('id', 1)->first()->banner;
        
      
        return view('layouts.site',[
            'editing'=>$editing,
            'unifications'=>$unifications,
            'goods'=>$goods,
            'cooperations'=>$cooperations,
            'bisnes'=>$bisnes,
            'purses'=>$purses,
            'umbrellas'=>$umblellas,
            'belts'=>$belts,
            'scarves'=>$scarves,
            'decorations'=>$decorations,
            'clocks'=>$clocks,
            'banner'=>$banner
        ]);
    }


}