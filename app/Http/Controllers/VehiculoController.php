<?php

namespace App\Http\Controllers;
use App;

use App\Vehiculo;
use App\Persona;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{

    public function index(){

        $vehiculos=Vehiculo::all();
        return view('index', ['vehiculos' => $vehiculos]);
    }

    public function create(){
        return view('create');
    }
    
    public function store(Request $request){

        Validator::make($request->all(), [
            'marca' => 'required|in:chevrolet,mazda,toyota',
            'nombre' => 'required',
            'placa' => 'required',
            'cedula' => 'required'
        ], [
            'marca.in' => 'Solo se permite las siguientes:  chevrolet, mazda o toyota',
            'cedula.required'=>'La cedula es obligatoria',
            'nombre.required'=>'El nombre es obligatoria',
            'placa.required'=>'La placa es obligatoria'

        ])->validate();

        // $datos = $request->validated();

        
        $nuevaPersona= Persona::create([
            'cedula' =>$request['cedula'],
            'nombre' =>$request['nombre']]);

     
        Vehiculo::create([
            'placa' =>$request['placa'],
            'marca' =>$request['marca'],
            'persona_id' => $nuevaPersona->id]);
       
        return back()->with('mensaje','El vehiculo fue registrado exitosamente');
    }

    public function estadistica (){
        $vehiculoMazda=count(Vehiculo::where('marca', '=', 'mazda')->get());
        $vehiculoToyota=count(Vehiculo::where('marca', '=', 'toyota')->get());
        $vehiculoChevrolet=count(Vehiculo::where('marca', '=', 'chevrolet')->get());
        $total=[$vehiculoToyota,$vehiculoMazda,$vehiculoChevrolet];

        $marcas=['Toyota', 'Mazda', 'Chevrolet'];
        return(view('estadistica', compact('total', 'marcas')));



    }
    
}
