<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    function index()
    {
        $students = Student::all();

        return response()->json($students, 200);

    }
}
