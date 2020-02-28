<?php

namespace App\Http\Controllers;

use App\empleado;
use Illuminate\Http\Request;
//use App\Http\Requests\CreateEmpleadoRequest;
use  App\Http\Requests\SaveEmpleadoRequest;

class EmpleadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emplead = empleado::orderBy('apellidos', 'ASC')->paginate();
        return view('empleados.index', compact('emplead'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create', [
            'empleadItem' => new empleado
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveEmpleadoRequest $request)
    {

        //      $fields = request()->validate([
        //     'noempleado' => 'required',
        //     'nombre' => 'required',
        //     'apellidos' => 'required',
        //     'ine' => 'required',
        //     'curp' => 'required',
        //     'cargo' => 'required',
        //     'rfc' => 'required',
        //     'calle' => 'required',
        //     'colonia' => 'required',
        //     'cp' => 'required',
        //     'municipio' => 'required',
        //     'correo' => 'required',
        //     'nocelular' => 'required',
        // ]);
        //empleado::create($fields);
        //empleado::create( $request->validated() );
        empleado::create( request()->all());
        return redirect()->route('empleados.index')->with('status', 'El empleado fue agregado con exito');
        //return request();


         // empleado::create( $request->validated() );
         // return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $emplea)
    {
        return view('empleados.show',[
            // 'project => Project::find($id'
            'empleadItem' => $emplea //Empleado::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $emplea)
    {
         return view('empleados.edit',[
            // 'project => Project::find($id'
            'empleadItem' => $emplea //Empleado::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Empleado $emplea, SaveEmpleadoRequest $request)
    {
        //$emplea->updateOrInsert( $request->validated() );
        $emplea->update([
       'noempleado' => request('noempleado'),
       'nombre' => request('nombre'),
       'apellidos' => request('apellidos'),
       'ine' => request('ine'),
       'curp' => request('curp'),
       'areaadscr' => request('areaadscr'),
       'cargo' => request('cargo'),
       'rfc' => request('rfc'),
       'calle' => request('calle'),
       'colonia' => request('colonia'),
       'cp' => request('cp'),
       'municipio' => request('municipio'),
       'noext' => request('noext'),
       'noint' => request('noint'),
       'correo' => request('correo'),
       'nocasa' => request('nocasa'),
       'nocelular' => request('nocelular'),
        ]);
        return redirect()->route('empleados.show', $emplea)->with('status', 'La informacion fue actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $emplea)
    {
        $emplea->delete();
        return redirect()->route('empleados.index')->with('status', 'El empleado fue eliminado con exito');
    }
}
