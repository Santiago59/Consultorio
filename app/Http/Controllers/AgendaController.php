<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Agenda::All();
        return view('agenda.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agenda= new agenda;
        
        $agenda->id =$request->id;
        $agenda->id_paciente =$request->id_paciente;
        $agenda->id_doctor =$request->id_doctor;
        $agenda->fecha_agenda =$request->fecha_agenda;
        $agenda->hora_inicio =$request->hora_inicio;
        $agenda->hora_final =$request->hora_final;
        $agenda->motivo =$request->motivo;
        $agenda->save();

        return view('agenda.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        $editAgenda = Agenda::find($agenda);
        return view('agenda.edit', compact('editAgenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        $editarAgenda= Agenda::find($agenda);

        $editarAgenda->id =$request->id;
        $editarAgenda->id_paciente =$request->id_paciente;
        $editarAgenda->id_doctor =$request->id_doctor;
        $editarAgenda->fecha_agenda =$request->fecha_agenda;
        $editarAgenda->hora_inicio =$request->hora_inicio;
        $editarAgenda->hora_final =$request->hora_final;
        $editarAgenda->motivo =$request->motivo;
        $editarAgenda->save();

        return redirect()->route('agenda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        $eliminaragenda = Agenda::find($agenda);
        $eliminaragenda->delete();
         return back()->with('Mensaje', 'agenda eliminada');
    }
}
