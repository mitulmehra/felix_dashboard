<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function save(Request $request)
    {
        dd($request->file);
        return view('index');
    }
}
