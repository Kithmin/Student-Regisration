<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(REQUEST $request){
        {
            return view('About');       
         }
    }

    
}
