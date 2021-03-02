@extends('layouts.layout')

@section('title', 'Page Title')

@section('content')

<div class="row contenedor">
        <div class="column1">
            <img src="/images/exa1.jpeg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="column2" style="background-color:#96D1CD;">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">User account</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password username">
              </div>
              <button type="button" class="btn btn-primary btn-sm">Login</button>

              
        </div>
    </div>
</div>
@endsection