@extends('plantilla')
@section('secciondinamica')
<h3>Formulario Para El Registro De Agendas</h3>
<form action="{{url('/usuario')}}" method="POST">
@csrf
<label for="">id Agenda</label>

<input type="number" name="id" placeholder=" id agenda" class="form-
control mb-2"><br>
<label for="">id Paciente</label>

<input type="string" name="id_paciente" placeholder="id paciente" class="form-
control mb-2"><br>
<label for="">id Doctor</label>

<input type="string" name="id_doctor" placeholder="id doctor" class="form-
control mb-2"><br>
<label for="">Fecha Agenda</label>

<input type="date" name="fecha_agenda" placeholder="fecha agenda" class="form-
control mb-2"><br>
<label for="">Hora Inicio</label>

<input type="time" name="hora_inicio" placeholder="hora inicio" class="form-
control mb-2"><br>
<label for="">Hora Final</label>

<input type="time" name="hora_final" placeholder="hora final" class="form-
control mb-2"><br>
<label for="">Motivo de Consulta</label>

<input type="string" name="motivo" placeholder="motivo" class="form-
control mb-2"><br>

<button class="btn btn-primary btn-
block" type="submit">Ingresar Paciente</button>

</form>
@endsection