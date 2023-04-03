@extends('layouts.front')
@section('content')
<html>
<h2>New Courses</h2>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('course.all')}}">All Courses>>>></a>

                        </li>
                    </ul>
                    @if(Auth()->check())
                    @if(Auth()->user()->role === 1)
                    <form method="post" enctype="multipart/form-data" action="{{route('Addcourse.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="course_id" class="col-md-4 col-form-label text-md-right">{{ __('Course ID') }}</label>

                            <div class="col-md-6">
                                <input id="course_id" type="text" class="form-control @error('course_id') is-invalid @enderror" name="course_id" value="{{ old('course_id') }}" required autocomplete="course_id" autofocus>

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
                                <input id="course_name" type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name" value="{{ old('course_name') }}" required autocomplete="course_name">

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
                                <textarea name="course_description" input id="course_description"  rows="5" class="form-control @error('course_description') is-invalid @enderror" id="course_description" class="form-control" rows="5" required>

                                @error('course_descripion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    <div class="form-group row">
                    </form>
                    @else
                    <h1>OOPS...</h1>
                    <h3>You don't have permissions to this page...!</h3>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

</html>
@endsection