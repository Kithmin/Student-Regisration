@extends('layouts.front')
@section('content')

 <form method="post" enctype="multipart/form-data" action="{{route('STDcourse.student')}}">
    @csrf
    <div class="form-group col-md-7">
      <label for="inputSTDname">STD-Name</label>
      <input type="name" class="form-control" id="inputSTDname" name="STDName" placeholder="STD Name">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">STD-Email</label>
        <input type="email" class="form-control" id="inputEmail4"  name="STDEmail" placeholder="STD Email">
        </div>
    </div>
    
    <div class="form-group col-md-4">
        <label for="inputState">Course</label>
        <select id="inputState" class="form-control">  
            <option selected>Choose...</option>
            <!--call the course table-->
            @foreach($courses as $course)                                                           
            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
            @endforeach
            
        </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">No.of Subject</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
      </select>
    </div>
    </div class="form-group mx-sm-3 mb-2">
    
    <button type="submit" class="btn btn-primary mb-2">Confirm </button>
  </form>





@endsection