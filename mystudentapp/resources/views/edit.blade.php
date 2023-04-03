@extends('layouts.app')
@section('content')


<h3>Update This!</h3>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Edit Course')}}</div>
                <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="{{route('course.update',$course->id)}}">
                    @csrf
                    <input type="hidden" name="hidId" id="hidId" value="{{$course->id}}"> 
                    <div class="form-group row">
                            <label for="course_id" class="col-md-4 col-form-label text-md-right">{{ __('Course ID') }}</label>

                            <div class="col-md-6">
                                <input id="course_id" type="text" class="form-control @error('course_id') is-invalid @enderror" 
                                name="course_id" value="{{$course->course_id}}" required autocomplete="course_id" autofocus>

                                @error('course_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="course_name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name') }}</label>

                            <div class="col-md-6">
                                <input id="course_name" type="text" class="form-control @error('course_name') is-invalid @enderror" 
                                name="course_name" value="{{$course->course_name}}" required autocomplete="course_name">

                                @error('course_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="course_description" class="col-md-4 col-form-label text-md-right">{{ __('Course Description') }}</label>

                            <div class="col-md-6">
                                <textarea name="course_description" input id="course_description"  
                                rows="5" class="form-control @error('course_description') is-invalid @enderror" 
                                id="course_description" class="form-control" rows="5" required>
                                {{$course->course_description}}   
                                @error('course_descripion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    <div class="form-group row">














                </form>
            </div>    
        </div>
    </div>
</div>


<!--call the course table data and pass the hidden value in update form / line no:15  -->

<!-- connect course table  description  / line no:52 -->





@endsection