<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroControlador extends Controller
{
    public function index(){
        return view('crear');
    }

    public function store(Request $request){
        dd($request);
    }
}
