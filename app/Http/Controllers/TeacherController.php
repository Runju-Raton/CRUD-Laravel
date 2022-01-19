<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function create(Request $request){
        dd($request);
        /*  Teacher::create([
            "name"          => $request->name,
            "gender"        => $request->gender,
            "area_of_experience"=>$request->area_of_experience
        ]); */
    }
}
