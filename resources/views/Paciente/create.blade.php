@extends('plantilla')
@section('secciondinamica')
<h3>Formulario Para El Registro De Pacientes</h3>
<form action="{{url('/usuario')}}" method="POST">
@csrf
<label for="">id Paciente</label>

<input type="number" name="id" placeholder=" id paciente" class="form-
control mb-2"><br>
<label for="">Nombres</label>

<input type="string" name="nombres" placeholder="nombres" class="form-
control mb-2"><br>
<label for="">Email</label>

<input type="string" name="email" placeholder="apellidos" class="form-
control mb-2"><br>
<label for="">Celular</label>

<input type="number" name="celular" placeholder="celular" class="form-
control mb-2"><br>
<label for="">Direccion</label>

<input type="string" name="direccion" placeholder="direccion" class="form-
control mb-2"><br>
<label for="">Fecha De Nacimiento</label>

<input type="date" name="fecha" placeholder="fecha de nacimiento" class="form-
control mb-2"><br>
<label for="">Motivo De Consulta</label>

<input type="string" name="motivo" placeholder="motivo de consulta" class="form-
control mb-2"><br>
<button class="btn btn-primary btn-
block" type="submit">Ingresar Paciente</button>

</form>
@endsection
