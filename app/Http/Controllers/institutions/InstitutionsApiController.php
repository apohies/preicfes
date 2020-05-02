<?php

namespace App\Http\Controllers\institutions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstitutionsApiController extends Controller
{
    public function getAllInstitutions(){

        $institutions = DB::table('institutions')
        ->select('institutions.institutionName as nombre_institucion'
                ,'institutions.institutionInfo as info_institucion')
        ->get();

        return response()->json(['instituciones'=>$institutions]);
    }
}
