<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function stdPhone(){
        // $result=Student::find(2)->phone->no;
        // $result = Phone::find(2)->student->name;
        $result = Student::find(2)->with("phone:id,no")->get();
        return $result;
    }
}
