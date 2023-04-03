<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Vital_ONE Institute </title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link href="blog" rel="stylesheet">
</head>

<body>

  <div class="container">
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">

        <div class="col-4 d-flex justify-content-end align-items-left">

          <a class="text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
              <circle cx="10.5" cy="10.5" r="7.5"></circle>
              <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
            </svg>
          </a>
          <a class=" btn btn-sm btn-outline-secondary " href="{{route('login')}}">Login In</a>
          <a class=" btn btn-sm btn-outline-secondary " href="{{route('register')}}">Sign up</a>

        </div>


    </header>
    <div class="nav-scroller  mb-0">
      <nav class="nav d-flex justify-content-between">
        <a class="blog-header-logo text-dark" href="{{route('welcome')}}">Home</a>
        <a class="p-0 text-muted" href="{{route('About.about')}}">About</a>
        <a class="p-0 text-muted" href="{{route('STDcourse.STDcourse')}}">My Courses</a>
        @if(Auth()->check())
        @if(Auth()->user()->role === 1)
        <a class="p-0 text-muted" href="/course">Course</a>
        @else
        <!--<a class="p-0 text-muted">Course</a>-->
        @endif
        @endif
      </nav>
    </div>

  </div>

  @yield('content')


  </div>
  </div>
</body>

</html>