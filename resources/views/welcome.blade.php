@extends('layouts.layout')
@section('title', 'Page Title')
@section('content')


<div class="row contenedor" style="margin-top: 7% !important;">
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
              <strong><label style="color:white" for="exampleFormControlInput1" class="form-label">Cuenta de usuario</label><strong>
              <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
        </div>
        <div class="mb-3">
              <label style="color:white" for="exampleFormControlInput1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password username">
        </div>
        <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </form>
    <p></p>
    <p></p>
    <p></p>
    
    <h3 style="color:white"> ¿Aun no estas registrado? Registrate!</h3>

    <form method="POST" action="/addUser">
        {{ csrf_field() }}
        <div class="mb-3">
            <label style="color:white" for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="nombre" >
        </div>

        <div class="mb-3">
            <label style="color:white" for="email">Apellido:</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="apellido" >
        </div>

        <div class="mb-3">
            <label style="color:white" for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@dominio.com" >
        </div>

        <div class="mb-3">
            <label style="color:white" for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password" >
        </div>

        <div class="mb-3">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Registrarse</button>
        </div>
        
    </form>
  </div>
          
</div>


@endsection


