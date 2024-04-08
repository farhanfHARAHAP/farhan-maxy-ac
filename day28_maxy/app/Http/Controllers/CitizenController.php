<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizen;
use Illuminate\Support\Facades\Validator;

class CitizenController extends Controller
{
    public static function showCitizen(){
        $data = Citizen::all();
        return $data;
    }

    public static function createCitizen(Request $request){

        $rules = [
            'name' => 'required|string',
            'age' => 'required|integer|min:1',
            'address' => 'required|string',
            'job' => 'nullable|string',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return view('citizen', [
                'alert' => 'Input form is incorrect! Failed to add new citizen!',
                'data' => CitizenController::showCitizen()
            ]);
        }

        Citizen::create($request->validate($rules));

        return view('citizen', [
            'alert' => 'New Citizen has been registered!',
            'data' => CitizenController::showCitizen()
        ]);
    }

    public static function destroyCitizen($id){
        Citizen::destroy($id);
    }

}
