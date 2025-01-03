<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\v1\StudentStoreRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    function index()
    {
        $students = Student::all();

        return response()->json($students, 200);

    }

    function store(StudentStoreRequest $request)
    {
        $student = Student::create([
            'image' => $request->image,
            'name' => $request->name,
            'grade' => $request->grade,
            'school_id' => $request->school_id
        ]);

        return response()->json([
            'data' => $student,
            'message' => 'Student created successfully',
            'status' => 201
        ]);

    }
}
