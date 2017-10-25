<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
use App\Editing;

class AdminController extends Controller
{
    public function editor(Request $request){
        if($request->isMethod('post')){
            if($request->h1_header){
                // dd($request);
                $editor = Editing::find(1);
                $editor->font_size = $request->font_size;
                $editor->margin_top = $request->margin_top;
                $editor->color = $request->color;
                $editor->uppercase = $editor->uppercase;
                $editor->save();
            }
            if($request->h2_header){
                $editor = Editing::find(2);
                $editor->font_size = $request->font_size;
                $editor->color = $request->color;
                $editor->uppercase = $editor->uppercase;
                $editor->save();
            }
            if($request->h3_header){
                $editor = Editing::find(3);
                $editor->font_size = $request->font_size;
                $editor->color = $request->color;
                $editor->uppercase = $editor->uppercase;
                $editor->save();
            }
            if($request->banners){
                $editor = Editing::find(4);
                $editor->font_size = $request->font_size;
                $editor->color = $request->color;
                $editor->uppercase = $editor->uppercase;
                $editor->save();
            }
            if($request->tovary){
                $editor = Editing::find(5);
                $editor->font_size = $request->font_size;
                $editor->color = $request->color;
                $editor->uppercase = $editor->uppercase;
                $editor->save();
            }
            if($request->goods){
                $editor = Editing::find(6);
                $editor->font_size = $request->font_size;
                $editor->color = $request->color;
                $editor->uppercase = $editor->uppercase;
                $editor->save();
            }
            if($request->cooperation){
                $editor = Editing::find(7);
                $editor->font_size = $request->font_size;
                $editor->color = $request->color;
                $editor->uppercase = $editor->uppercase;
                $editor->save();
            }
            if($request->footer_h1){
                $editor = Editing::find(8);
                $editor->font_size = $request->font_size;
                $editor->color = $request->color;
                $editor->uppercase = $editor->uppercase;
                $editor->save();
            }
            if($request->footer_info_title){
                $editor = Editing::find(9);
                $editor->font_size = $request->font_size;
                $editor->color = $request->color;
                $editor->uppercase = $editor->uppercase;
                $editor->save();
            }
            if($request->footer_contact){
                $editor = Editing::find(10);
                $editor->font_size = $request->font_size;
                $editor->color = $request->color;
                $editor->uppercase = $editor->uppercase;
                $editor->save();
            }
            if($request->header_banner){
                if($request->file('foto')){
                    $file = $request->file('foto');
                    $file->move(public_path().'/assets/img/', 'ban.jpg');
                }
            }

        }
        return view('layouts.editor');
    }
    public function execute(Request $request, $locale=false){
        if($request->isMethod('post')){
            if($request->unifications){
                $unification = new Unification();
                $unification->title = $request->title;
                if($request->file('img')){
                    $file = $request->file('img');
                $file->move(public_path().'/assets/img/unifications/', $file->getClientOriginalName());
                $unification->img=$file->getClientOriginalName();
                }
                $unification->save();
                $unifications = DB::table('unifications')->paginate(1);
                return view('layouts.admin',[
                    'unifications'=>$unifications
                ]);
                
            }
            if($request->goods){
                $good = new Goods();
                $file = $request->file('img');
                $file->move(public_path().'/assets/img/mujer/', $file->getClientOriginalName());
                $good->img=$file->getClientOriginalName();
                $good->save();
            }
            if($request->goods_bisnes){
                $goods_bisnes = new Bisnes();
                $file = $request->file('img');
                $file->move(public_path().'/assets/img/maletas/', $file->getClientOriginalName());
                $goods_bisnes->img=$file->getClientOriginalName();
                $goods_bisnes->save();
            }
            if($request->purses){
                $purses = new Purses();
                $file = $request->file('img');
                $file->move(public_path().'/assets/img/carteras/', $file->getClientOriginalName());
                $purses->img=$file->getClientOriginalName();
                $purses->save();

            }
            if($request->del_good_purses){
                $purses = Purses::find($request->del_good_purses);
                $purses->delete();
            }
            if($request->umbrellas){
                $umbrellas = new umbrella();
                $file = $request->file('img');
                $file->move(public_path().'/assets/img/par/', $file->getClientOriginalName());
                $umbrellas->img=$file->getClientOriginalName();
                $umbrellas->save();
            }
            if($request->del_good_umbrellas){
                $umbrellas = umbrella::find($request->del_good_umbrellas);
                $umbrellas->delete();
            }
            if($request->belts){
               $belts = new Belts();
               $file = $request->file('img');
               $file->move(public_path().'/assets/img/centurons/', $file->getClientOriginalName());
               $belts->img=$file->getClientOriginalName();
               $belts->save();
            }
            if($request->del_good_belts){
                $belts = Belts::find($request->del_good_belts);
                $belts->delete();
            }
            if($request->scarves){
                $scarves = new Scarves();
                $file = $request->file('img');
                $file->move(public_path().'/assets/img/bufanda/', $file->getClientOriginalName());
                $scarves->img=$file->getClientOriginalName();
                $scarves->save();
            }
            if($request->del_good_scarves){
                $scarves = Scarves::find($request->del_good_scarves);
                $scarves->delete();
            }
            if($request->decorations){
                $decorations = new Decoration();
                $file = $request->file('img');
                $file->move(public_path().'/assets/img/decoracion/', $file->getClientOriginalName());
                $decorations->img=$file->getClientOriginalName();
                $decorations->save();
            }
            if($request->del_good_decorations){
                $decorations = Decoration::find($request->del_good_decorations);
                $decorations->delete();
            }
            if($request->clocks){
                $clocks = new Clock();
                $file = $request->file('img');
                $file->move(public_path().'/assets/img/relojs/', $file->getClientOriginalName());
                $clocks->img=$file->getClientOriginalName();
                $clocks->save();
            }
            if($request->del_good_clocks){
                $clocks = Clock::find($request->del_good_clocks);
                $clocks->delete();
            }
            if($request->del_uni){
                $unification = Unification::find($request->del_uni);
                $unification->delete();
                $unifications = DB::table('unifications')->paginate(1);
            
                return view('layouts.admin',[
                    'unifications'=>$unifications
                ]);
            }
            if($request->del_good){
                $good = Goods::find($request->del_good);
                $good->delete();              
            }
            if($request->del_good_bisnes){
                $good_bisnes = Bisnes::find($request->del_good_bisnes);
                $good_bisnes->delete();
            }
            if($request->del_coop){
               $cooperation = Cooperation::find($request->del_coop);
               $cooperation->delete();
            }
            if($request->cooperations){
              
                $cooperation = new Cooperation();
                $file = $request->file('img');
                // dd($file);
                $file->move(public_path().'/assets/img/cooperations/', $file->getClientOriginalName());
                $cooperation->img = $file->getClientOriginalName();
                $cooperation->save();
            }
        }
        $goods=DB::table('goods')->paginate(1);
        $unifications = DB::table('unifications')->paginate(1);
        $cooperations = DB::table('cooperations')->paginate(1);
        $goods_bisnes = DB::table('bisnes')->paginate(1);
        $purses = DB::table('purses')->paginate(1);
        $umbrellas = DB::table('umbrellas')->paginate(1);
        $belts = DB::table('belts')->paginate(1);
        $scarves = DB::table('scarves')->paginate(1);
        $decorations = DB::table('decorations')->paginate(1);
        $clocks = DB::table('clocks')->paginate(1);

       
        return view('layouts.admin',[
            'unifications'=>$unifications,
            'goods'=>$goods,
            'goods_bisnes'=>$goods_bisnes,
            'cooperations'=>$cooperations,
            'purses'=>$purses,
            'umbrellas'=>$umbrellas,
            'belts'=>$belts,
            'scarves'=>$scarves,
            'decorations'=>$decorations,
            'clocks'=>$clocks
        ]);
    }
}
