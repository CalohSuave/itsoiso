@extends('layouts.layout')
@section('title', 'Page Title')
@section('content')


<div class="row contenedor">
@if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif
  <div class="column1">
    <img src="/images/exa1.jpeg" class="img-fluid lel" alt="Responsive image">
    
  </div>
  
  
  @if(isset(Auth::user()->email))
    <script>window.location="/main";</script>
   @endif

  <div class="column2" style="background-color:#355C7D;">
      <form action="{{ url('/main/checklogin') }}" method="post">
      {{ csrf_field() }}
        <div class="mb-3">
              <strong><label style="color:white" for="exampleFormControlInput1" class="form-label">User account</label><strong>
              <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
        </div>
        <div class="mb-3">
              <label style="color:white" for="exampleFormControlInput1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password username">
        </div>
        <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </form>
  </div>        
</div>

@endsection


