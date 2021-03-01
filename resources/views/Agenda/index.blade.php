@extends('plantilla')
@section('secciondinamica')
<h1>Formulario De Agendas</h1>
    <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">ID AGENDA</th>
      <th scope="col">ID PACIENTE</th>
      <th scope="col">ID DOCTOR</th>
      <th scope="col">FECHA AGENDA</th>
      <th scope="col">HORA INICIO</th>
      <th scope="col">HORA FINAL</th>
      <th scope="col">MOTIVO DE CONSULTA</th>

      </tr>
  </thead>  
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->id paciente}}</td>
      <td>{{$dato->id doctor}}</td>
      <td>{{$dato->fecha_agenda}}</td>
      <td>{{$dato->hora_inicio}}</td>
      <td>{{$dato->hora_final}}</td>
      <td>{{$dato->motivo_consulta}}</td>
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