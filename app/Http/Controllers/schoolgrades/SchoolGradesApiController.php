<?php

namespace App\Http\Controllers\schoolgrades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolGradesApiController extends Controller
{
    public function getAllSchoolGrades(){

        $schoolGrades = DB::table('schoolgrades')
        ->join('institutions', 'schoolgrades.idInstitution', '=', 'institutions.idInstitution')
        ->select('institutions.institutionName as nombre_institucion'
                ,'schoolgrades.gradeName as nombre_grado'
                ,'schoolgrades.gradeInfo as info_grado')
        ->get();

        return response()->json(['grados'=>$schoolGrades]);
    }
}
