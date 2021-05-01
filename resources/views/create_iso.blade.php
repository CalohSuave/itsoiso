@extends('layouts.layout')
@section('title', 'Page Title')
@section('content')


<style>

form label {
    color: white !important;
}
</style>

@if(!isset(Auth::user()->email))
  <script>window.location = "/"</script>

@else

<div class="row contenedor" style="margin-top:8% !important;">
<div class="form-row">
<div class="card-deck">
<a class="btn btn-primary" href="/main" role="button" style="display: flex;   justify-content: center;   align-items: center;">Atrás</a>
  <div class="card bg-primary text-white">
    <img class="card-img-top" src="/images/WindowsDesktop.png"  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Windows Desktop</h5>
      <p class="card-text"><b>Usuario</b>: Administrador<br><b>Password</b>: LSOnline21<br><b>Version</b>:10</p>
      <form  class="card-text" method="get" action="/main/createiso">
      <button class="btn btn-outline-light" type="submit" value="1" name="SO" >Crear - ES</button>
      <button class="btn btn-outline-light" type="submit" value="2" name="SO" >Create -EN</button>
      </form>
    </div>
    
  </div>
  <div class="card bg-primary text-white">
    <img class="card-img-top" src="/images/2k8.png"  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Windows Server Core</h5>
      <p class="card-text"><b>Usuario</b> Administrador<br><b>Password</b>: LSOnline21<br><b>Version</b>:2008 R2</p>
      <form  class="card-text" method="get" action="/main/createiso" >
      <button class="btn btn-outline-light" type="submit" value="3" name="SO" >Crear - ES</button>
      <button class="btn btn-outline-light" type="submit" value="4" name="SO" >Create -EN</button>
      </form>
    </div>
  </div>
  <div class="card bg-primary text-white">
    <img class="card-img-top" src="/images/2k12.png"  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Windows DataCenter GUI</h5>
      <p class="card-text"><b>Usuario</b> Administrador<br><b>Password</b>: LSOnline21<br><b>Version</b>:2012 R2</p>
      <form  class="card-text" method="get" action="/main/createiso">
      <button class="btn btn-outline-light" type="submit" value="5" name="SO" >Crear - ES</button>
      <button class="btn btn-outline-light" type="submit" value="6" name="SO" >Create -EN</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
@endif




@endsection

