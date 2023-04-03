@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Your Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{__("you are logged in!")}}

                    <form method="post" action="{{route('posts.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="name" name="Name" class="form-control"   placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddrerss">Address</label>
                            <input type="text" name="Address" class="form-control" id="inputAddress" placeholder="youraddress" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputGaurdian">Gaurdian</label>
                            <input type="gaurdian" name="Gaurdian" class="form-control" id="exampleGaurdian"  placeholder="Enter gaurdian name" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>

                    </form> 
                    
                    <!--- <form method="post" action="{{route('posts.store')}}">
                        @csrf
                        
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="Name" name="Name" class="form-control" required/>
                                    <label class="form-label" for="Name">Name</label>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-outline mb-4">
                            <input type="text" id="Address" name="Address" class="form-control" />
                            <label class="form-label" for="Address">Address</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="form6Example5" name="Email" class="form-control" />
                            <label class="form-label" for="form6Example5">Email</label>
                        </div>

                        

                       
                        <div class="form-outline mb-4">
                            <input type="text" id="form6Example3" name="Gaurdian" class="form-control" />
                            <label class="form-label" for="form6Example3">Gaurdian</label>
                        </div>

                        
                        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
