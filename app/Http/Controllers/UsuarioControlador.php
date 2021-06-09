<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioControlador extends Controller
{
    public function index(){
		
		$title1 = 'Alumnas';
		$title2 = 'Alumnos';
		$mujeres= ['Martina', 'Perla', 'Danna'];
		$hombres= ['Joel', 'Carlos', 'Josué', 'David', 'Matias', 'José', 'Juan', 'Marcos'];


		return view('users')
		->with('title1',$title1)
		->with('title2',$title2)
		->with('mujeres',$mujeres)
		->with('hombres',$hombres);


	}

	
	public function show($id){
		return "Tu id es: {$id} y eres un alumno de la UTSOE";
	}

}
