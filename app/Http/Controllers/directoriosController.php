<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\directorio;

class directoriosController extends Controller
{
    function mostrarDirectorios(){
        $directorio = directorio::all(); 
        return view('directorio', compact('directorio'));
        }//
}
