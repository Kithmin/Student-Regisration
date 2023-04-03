<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\STDcourse;
use Illuminate\Http\Request;

class STDcourseController extends Controller
{   
    public function stdcourse(Request $request)
     {
        $courses = Course::all();  //call to the course table
        // dd($courses);
        return view('mycourse', compact('courses'));   // get in to the course tabel data    
     }


    public function student(Request $request){
        //dd($request->all());
        STDcourse::create([

         'STDName'=> $request->STDName,
         'STDEmail'=> $request->STDEmail
        
        ]);
        
        return back();
    }
}
