<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\v1\StudentStoreRequest;
use App\Http\Requests\Api\v1\StudentUpdateRequest;
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

    function update(StudentUpdateRequest $request, Student $student)
    {
        // Only update attributes that are provided
        $data = $request->only(['image', 'name', 'grade', 'school_id']);

        $student->update($data);

        return response()->json([
            'data' => $student,
            'message' => 'Student updated successfully',
            'status' => 200
        ]);

    }

    function show(Student $student)
    {
        return response()->json($student, 200);
    }

    function destroy(Student $student)
    {
        $student->delete();

        return response()->json(['message' => 'Student deleted successfully', 'status' => 200]);
    }

    function search(Request $request)
    {
        $query = $request->input('q');

        if ($query) {

            $student = Student::where('name', 'LIKE', "%$query%")->orWhere('grade', 'LIKE', "%$query%")->get();
            return response()->json($student, 200);

        }

        return response()->json(['message' => 'No results found', 'status' => 404]);
    }
}
