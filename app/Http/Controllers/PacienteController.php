<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Paciente::All();
        return view('paciente.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente= new Paciente();
        
        $paciente->id =$request->id;
        $paciente->nombres =$request->nombres;
        $paciente->email =$request->email;
        $paciente->celular =$request->celular;
        $paciente->direccion =$request->direccion;
        $paciente->fecha_nacimiento =$request->fecha_nacimiento;
        $paciente->motivo_consulta =$request->motivo_consulta;
        $paciente->save();

        return view('doctor.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        $editPaciente = Paciente::find($paciente);
        return view('paciente.edit', compact('editPaciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $editarPaciente= Paciente::find($paciente);

        $editarPaciente->id =$request->id;
        $editarPaciente->nombres =$request->nombres;
        $editarPaciente->email =$request->email;
        $editarPaciente->celular =$request->celular;
        $editarPaciente->direccion =$request->direccion;
        $editarPaciente->fecha_nacimiento =$request->fecha_nacimiento;
        $editarPaciente->motivo_consulta =$request->motivo_consulta;
        $editarPaciente->save();

        return redirect()->route('paciente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $eliminarpaciente = Paciente::find($paciente);
        $eliminarpaciente->delete();
         return back()->with('Mensaje', 'paciente eliminado');
    }
}
