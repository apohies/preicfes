<?php

namespace App\Http\Controllers\questionlevels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionsLevelsApiController extends Controller
{
    public function getAllQuestionsLevels(){

        $questionLevels = DB::table('questionlevels')
        ->join('areas', 'questionlevels.idArea', '=', 'areas.idArea')
        ->join('schoolgrades', 'areas.idGrade', '=', 'schoolgrades.idGrade')
        ->join('institutions', 'schoolgrades.idInstitution', '=', 'institutions.idInstitution')
        ->select('institutions.institutionName as nombre_institucion'
                ,'schoolgrades.gradeName as nombre_grado'
                ,'areas.areaName as nombre_area'
                ,'questionlevels.levelName as nombre_nivel'
                ,'questionlevels.levelInfo as info_nivel')
        ->get();

        return response()->json(['niveles_preguntas'=>$questionLevels]);
    }
}
