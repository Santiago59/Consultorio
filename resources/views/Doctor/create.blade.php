@extends('plantilla')
@section('secciondinamica')
<h3>Formulario Para El Registro De Doctores</h3>
<form action="{{url('/usuario')}}" method="POST">
@csrf
<label for="">id Doctor</label>

<input type="number" name="id" placeholder=" id doctor" class="form-
control mb-2"><br>
<label for="">Nombres</label>

<input type="string" name="nombres" placeholder="nombres" class="form-
control mb-2"><br>
<label for="">Especialidad</label>

<input type="string" name="especialidad" placeholder="especialidad" class="form-
control mb-2"><br>
<label for="">Celular</label>

<input type="number" name="celular" placeholder="celular" class="form-
control mb-2"><br>
<label for="">Direccion</label>

<input type="var" name="direccion" placeholder="direccion" class="form-
control mb-2"><br>

<button class="btn btn-primary btn-
block" type="submit">Ingresar Paciente</button>

</form>
@endsection