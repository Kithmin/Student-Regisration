@extends('layouts.front')
@section('content')



<div class="nav-scroller py-0 mb-1">
    
        
        
          
      <nav>
    </nav>
</div>

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
    <h1 class="display-4 font-italic">Vital One </h1>
    <h3>Discover your life</h3>

      <p class="lead my-3">Srilanka best education academy </p>
    
  </div>
</div>

 <div class="row mb-2">
  @foreach ($posts as $post)
  <div class="col-md-6">
          
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Hi!!!!</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Your Profile</a>
              </h3>
              <div class="mb-1 text-muted">{{date('y-m-d',strtotime($post->created_at))}}</div>
              <p class="card-text mb-auto">Name = {{$post-> Name}}</p>
              <p class="card-text mb-auto">Email = {{$post-> Email}}</p>
              <p class="card-text mb-auto">Address = {{$post-> Address}}</p>
              <p class="card-text mb-auto">Gaurdian = {{$post-> Gaurdian}}</p>
             
            </div>
          
        </div>

  @endforeach 
        
@endsection
