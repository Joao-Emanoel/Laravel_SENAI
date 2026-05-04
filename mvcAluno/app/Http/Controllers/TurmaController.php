<?php

namespace App\Http\Controllers;
use App\Models\Turma;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
     public function add ( Request $request ){

        $request-> validate ([
            'numSala' => 'required|num|max:255' ,
            'série' => 'required|string|max:255|unique:turmas,série'
 ]);
   
    Turma :: criar ([
            'numSala' => $request -> numSala ,
            'serie' => $request -> serie
 ]);

        return redirect ()->back ()->with ( 'success' , 'Turma Cadastrada com sucesso!' );
 }
 }
