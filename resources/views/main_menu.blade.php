@extends('layouts.layout')
@section('title', 'Page Title')
@section('content')

@if(!isset(Auth::user()->email))
  <script>window.location = "/"</script>

  @else

<div class="row contenedor">
  <div class="column1">
  <h1 style="color:white;">Lista ISO's</h3>
	<h4 style="color:white;" >Aqui dispones de una breve lista de tus ultimas ISO's</h4>
	<table class="table">
    <thead class="thead-light ">
      <tr>
        <th scope="col">Sistema Operativo</th>
        <th scope="col">Fecha</th>
        <th scope="col">Peso</th>
        <th scope="col">Descargar</th>
      </tr>
    </thead>
    <tbody style="color: white; align-items: center;">
    @isset($listaIsos)
    @foreach($listaIsos as $row)
   <tr>
   <td>{{$row['so']}}</td>
   <td>{{$row['created_at']}}</td>
    <td>{{$row['size']}}</td>
   </tr>
   @endforeach
    @endisset
    
    </tbody>
  </table>
  <form method="get" action="{{ url('/main/create') }}">
		<input type="submit" class="btn btn-primary" id="create" name="create" value="Create" style="margin-right:10px">
	</form>
  </div> 
  
  <div class="column2">
  <div class="container mt-8 d-flex justify-content-center">
    <div class="card p-3">
        <div class="d-flex align-items-center">
            <div class="image"> <img src="/images/picpf.png"  class="rounded" width="175"> </div>
            <div class="ml-3 w-100">
                <h4 class="mb-0 mt-0"><strong> {{ Auth::user()->name }} {{ Auth::user()->surname }}</strong></h4> <span>Junior Developer</span>
                <div class="p-2 mt-2 bg-primary d-flex justify-content-center rounded text-white stats">
                    <div class="d-flex flex-column"> <span>Plan Contratado</span> <span class="number3">Basic</span> 
                </div>          
                <div class="p-2 mt-2 bg-primary d-flex justify-content-center rounded text-white stats">
                    <div class="d-flex flex-column"> 
                    <form action="/" method="get">
                    <a class= "bg-dark rounded text-white stats" href="{{ url('/main/logout') }}">Logout</a>
                    </form>
                </div>
        </div>
    </div>
</div>
  </div>
</div>
@endif




@endsection


