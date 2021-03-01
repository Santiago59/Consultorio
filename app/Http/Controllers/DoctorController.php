<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Doctor::All();
        return view('doctor.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor= new Doctor();
        
        $doctor->id =$request->id;
        $doctor->nombres =$request->nombres;
        $doctor->especialidad =$request->especialidad;
        $doctor->celular =$request->celular;
        $doctor->direccion =$request->direccion;
        $doctor->save();

        return view('doctor.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $editDoctor = Doctor::find($doctor);
        return view('doctor.edit', compact('editDoctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $editarDoctor= Doctor::find($doctor);

        $editarDoctor->id =$request->id;
        $editarDoctor->nombre =$request->nombre;
        $editarDoctor->especialidad =$request->especialidad;
        $editarDoctor->celular =$request->celular;
        $editarDoctor->direccion =$request->direccion;
        $editarDoctor->save();

        return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $eliminardoctor = Doctor::find($doctor);
        $eliminardoctor->delete();
         return back()->with('Mensaje', 'doctor eliminado');
    }
}
