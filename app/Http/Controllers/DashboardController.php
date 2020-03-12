<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function  index(Request $request) {
        //Solo Titulo:
        //dd($request->query('title','Funciona!'));
        //Todo:
        //dump($request);die;
        return view ('test', [
            'title' => $request->query('title','Funciona!')
        ]);
    }
}
