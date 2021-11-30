<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\ui;
class UiController extends Controller
{
    public function index(){
        $tizim = ui::all();
        return view('welcome',[
            'uiAll'=> $tizim
        ]);
    }

    public function edit($id){
        $uiById = ui::where('id',$id)->firstOrFail();
        return view('edit',[
            'currentUi'=> $uiById
        ]);
    }

    public function saveEdit(Request $req,$id){
        $uiById = ui::where('id',$id)->firstOrFail();
        $uiById->name = $req->input('name');
        $uiById->price = $req->input('price');
        $uiById->update();
        return redirect('/');
    }

    public function addNewUi(Request $req){
        $name = $req->input('name');
        $price = $req->input('price');
        ui::create([
            'name'=>$name,
            'price'=>$price
        ]);
        return redirect('/');
    }

    public function deleteExistingUi($id){
        ui::where('id',$id)->firstOrFail()->delete();
        return redirect('/');
    }
}
