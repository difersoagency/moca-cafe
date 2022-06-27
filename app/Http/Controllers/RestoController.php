<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Kategori;
use Illuminate\Http\Request;

class RestoController extends Controller
{

    public function show_menu(){
            $kategori = Kategori::all();
            $menu = Item::inRandomOrder()->limit(6)->get();
            return view('pages.menu',['kategori' => $kategori,'menu'=> $menu]);
    }

    public function menu_data(Request $request){
        if ($request->ajax()) {
            $id = $request->get('id');
            if($id <= 0){
                $menu = Item::inRandomOrder()->limit(6)->get();
            }else{
                $menu = Item::whereHas('Kategori',function ($q) use ($id){
                    $q->where('kategori_id',$id);
                })->get();
            }
            return view('pages.data_menu',compact('menu'))->render();
        }

    }

    public function menu_detail($id){
        $detail = Item::find($id);
        $data = Item::inRandomOrder()->limit(5)->whereNotIN('id',[$id])->get();
        return view('pages.detail_menu',['detail' => $detail,'data' => $data]);

    }

}
