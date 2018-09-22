<?php

namespace App\Http\Controllers;
use App\Routine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RutinaController extends Controller
{
    //

    public function getRoutinesExcercises(int $id_usuario){
    		
    		$ejercicios=Routine::find($id_usuario)->excercises()->get();
    		return response()->json($ejercicios);
    }

    public function getRoutineGenerals(int $id_usuario){
    		$rutina=Routine::find($id_usuario);
    		return response()->json($rutina);
    }
}
