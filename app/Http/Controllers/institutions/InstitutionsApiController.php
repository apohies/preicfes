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

    public function getInstitution(Request $request)
    {
        $institutions = DB::table('institutions')
        ->select('institutions.institutionName as nombre_institucion','institutions.institutionInfo as info_institucion')
        ->where('idInstitution',$request->id)
        ->first();

        return response()->json(['institution'=>$institutions]);
    }

    public function createInstitution( Request $request)
    {
        DB::table('institutions')->insert(['institutionName'=>$request->name,
                                                        'institutionInfo'=>$request->description]);

         return response()->json('se envio');                                                
    }

    public function getDataTableInfo(){

        $columna1 = ['label' => 'Name',
                    'field' => 'name',
                    'sort' => 'asc',
                    'width'=> 150
                    ];
        
        $columna2 = ['label' => 'Position',
                    'field' => 'position',
                    'sort' => 'asc',
                    'width'=> 270
                    ];
        
        $columns = [$columna1,$columna2];

        $row1 = [
            'name' => 'Tiger Nixon',
            'position' => 'System Architect'
        ];

        $row2 = [
            'name' => 'Garrett Winters',
            'position' => 'Accountant'
        ];

        $rows = [$row1,$row2];

        $dataTableInfo = [$columns,$rows];

        return response()->json(['dataTableInfo'=>['columns'=>$columns,'rows'=>$rows]]);
    }

    public function getInstitutionsDataTable(){

        $institutions = DB::table('institutions')
        ->select('institutions.institutionName as nombre_institucion'
                ,'institutions.institutionInfo as info_institucion')
        ->get();

        $columns = [
            ['label' => 'Nombre Institución','field' => 'nombre_institucion','sort' => 'asc'],
            ['label' => 'Información Institución','field' => 'info_institucion','sort' => 'asc']
        ];

        $rows = [];

        foreach($institutions as $institution){

            $row = [
                'nombre_institucion' => $institution->nombre_institucion,
                'info_institucion' => $institution->info_institucion
            ];

            array_push($rows,$row);
        }

        return response()->json(['dataTableInfo'=>['columns'=>$columns,'rows'=>$rows]]);
    }
}
