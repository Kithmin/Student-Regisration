@extends('layouts.app')

@section ('content')

<h2>All Course are here </h2>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">course_id</th>
                <th scope="col">course_name</th>
                <th scope="col">course_description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course )
                <tr>
                <th scope="row">"{{ $course->course_id}}"</th>
                <td>"{{$course->course_name}}"</td>
                <td>{{$course->course_description}}</td>
                <td>
                    <a href="/course/edit/{{$course->id}}" class="btn btn-primary">Edit</a>
                    <a href="/course/courses/{{$course->id}}'" class="btn btn-warning">Delete</a>
                </td>
                </tr>
                @endforeach
            </tbody>
</table>



        </div>
    </div>
</div>




@endsection