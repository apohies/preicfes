<?php

namespace App\Http\Controllers\Prueba;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;

class PruebaApicontroller extends Controller
{
    public function index()
    {
        $usuarios=User::all();
        
        return response()->json(['user'=>$usuarios]);

    }
}
