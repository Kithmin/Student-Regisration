<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{


  
  public function course(Request $request)
  {
    return view('course');
  }
  public function store(Request $request)
  {

    $validatedData = $request->validate([
      'course_id' => 'required|unique:courses',
      'course_name' => 'required',
      'course_description' => 'required'
    ]);

    Course::create($validatedData);

    return view('course');
    
  }


  //get data in course table
  public function allcourse()
  {
    $courses= Course::all();
    
    return view('all-course', compact('courses'));
  }



  //edit 

  public function Edit($id)
  {
    $course = Course::findOrFail($id)->first(); //call database and get into previous data in form
    return view('edit', compact('course'));
  }



  //update process

  public function edits($id){
    $course= Course::findOrFail($id);
    return view('edit', compact('course'));
  }

  public function update($id ,Request $request){
    Course::findOrFail($id)->update($request->all());

    return back();
  }




  // public function update(Request $request, Course $course)
  //   {
  //       $validatedData = $request->validate([
  //           'course_id' => 'required|unique:courses,course_id'.$course->id,
  //           'course_name' => 'required',
  //           'course_description' => 'required',
  //       ]);

  //       $course->update($validatedData);
        
  //       return back();
  //       //return redirect()->route('courses')->with('success', 'Course updated successfully!');
  //   }



  //delete process


  public function delete($id)
  {
    // dd($id); 
    Course::findOrFail($id)->delete();
    // return back();
    return redirect('/course/courses')->with('status', 'Profile updated!');
  }
  
  
  
  // public function destroy(Course $course)
  // {
  //     $course->delete('course_id');

  //     return redirect()->route('course.course')->with('success', 'Course deleted successfully!');
  // }

}
