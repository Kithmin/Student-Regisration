<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    
   public function store(Request $request){
        Post::create([
            'user_id'=>auth()->user()->id,
            'Name'=> $request->Name,
            'Email'=> $request->Email,
            'Address'=> $request->Address,
            'Gaurdian'=> $request->Gaurdian 
        ]);
        return back();

   }
}
