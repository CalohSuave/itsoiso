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
<a class="btn btn-danger" href="/main" role="button" style="display: flex; align-items: center;background-color: #ED7D31">Atrás</a>
  <div class="card text-white" style="background-color: #ED7D31">
    <img class="card-img-top" src="https://logos-marcas.com/wp-content/uploads/2020/11/Ubuntu-Logotipo-2004-2010.jpg"  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ubuntu 16 LTS</h5>
      <p class="card-text"><b>Usuario</b>: root<br><b>Password</b>: toor<br><b>Version</b>:16.04</p>
      <form  class="card-text" method="get" action="/main/createiso">
      <button class="btn btn-outline-light" type="submit" value="7" name="SO" >Crear - ES</button>
      <button class="btn btn-outline-light" type="submit" value="8" name="SO" >Create -EN</button>
      </form>
    </div>
    
  </div>
  <div class="card text-white" style="background-color: #ED7D31">
    <img class="card-img-top" src="https://logos-marcas.com/wp-content/uploads/2020/11/Ubuntu-Logotipo-2004-2010.jpg"  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ubuntu 18 LTS</h5>
      <p class="card-text"><b>Usuario</b> root<br><b>Password</b>: toor<br><b>Version</b>:18.04</p>
      <form  class="card-text" method="get" action="/main/createiso" >
      <button class="btn btn-outline-light" type="submit" value="9" name="SO" >Crear - ES</button>
      <button class="btn btn-outline-light" type="submit" value="10" name="SO" >Create -EN</button>
      </form>
    </div>
  </div>
  <div class="card text-white" style="background-color: #ED7D31">
    <img class="card-img-top" src="https://logos-marcas.com/wp-content/uploads/2020/11/Ubuntu-Logotipo-2004-2010.jpg"  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ubuntu 20 LTS</h5>
      <p class="card-text"><b>Usuario</b> root<br><b>Password</b>: toor<br><b>Version</b>:20.4</p>
      <form  class="card-text" method="get" action="/main/createiso">
      <button class="btn btn-outline-light" type="submit" value="11" name="SO" >Crear - ES</button>
      <button class="btn btn-outline-light" type="submit" value="12" name="SO" >Create -EN</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
@endif




@endsection

