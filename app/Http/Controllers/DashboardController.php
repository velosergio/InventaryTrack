<?php

namespace InventaryTracker\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function  index(Request $request) {
        return view ('test', [
            'title' => $request->query('title','Funciona!')
        ]);
    }

    public function template(){
        return view('layouts.starter');
    }
}
