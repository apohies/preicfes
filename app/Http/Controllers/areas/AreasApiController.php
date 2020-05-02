<?php

namespace App\Http\Controllers\areas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreasApiController extends Controller
{
    public function getAllAreas(){

        $areas = DB::table('areas')
        ->join('schoolgrades', 'areas.idGrade', '=', 'schoolgrades.idGrade')
        ->join('institutions', 'schoolgrades.idInstitution', '=', 'institutions.idInstitution')
        ->select('institutions.institutionName as nombre_institucion'
                ,'schoolgrades.gradeName as nombre_grado'
                ,'areas.areaName as nombre_area'
                ,'areas.areaInfo as info_area')
        ->get();

        return response()->json(['areas'=>$areas]);
    }
}
