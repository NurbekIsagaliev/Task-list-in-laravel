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
}
