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
  <h1 style="color:white;">Lista ISO's</h3>
	<h4 style="color:white;">Aqui dispones de una breve lista de tus ultimas ISO's</h4>
	<table class="table">
    <thead class="thead-light ">
      <tr>
        <th scope="col">Sistema Operativo</th>
        <th scope="col">Idioma</th>
        <th scope="col">Fecha</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody style="color: white; align-items: center; ">
    @isset($listaIsos)
      @foreach($listaIsos as $row)
      <tr>
          <td>{{ $row->so }}</td>
          <td>{{ $row->idioma}}</td>
          <td >{{ $row->created_at }}</td>
          <td>
          <form method="get" action="/delete/{{ $row->id }}">
		      @csrf
		      @method('delete')
		      <button type="submit" class="btn btn-danger">Eliminar</button>
	        </form>
          </td>
      </tr>
  
    
   </tr>
   
   @endforeach
    @endisset
    
    </tbody>
  </table>

  
  @endif


  <a class="btn btn-primary" href="/main" role="button">Atrás</a>
@endsection


