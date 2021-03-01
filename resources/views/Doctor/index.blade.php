@extends('plantilla')
@section('secciondinamica')
<h1>Formulario De Doctores</h1>
    <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">ID DOCTOR</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">ESPECIALIDAD</th>
      <th scope="col">CELULAR</th>
      <th scope="col">DIRECCION</th>
      </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->nombres}}</td>
      <td>{{$dato->especialidad}}</td>
      <td>{{$dato->celular}}</td>
      <td>{{$dato->direccion}}</td>
      <td>
      <a href="{{url('usuario/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
      <form action="{{ route('usuario.destroy', $dato) }}" class="d-inline" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
      </form>
    
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection