<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        $data = 
        [
            'message' => 'get all students',
            'data' => $students
        ];

        return response()->json($data, 200);
    }
    public function store(Request $request)
    {
        $input = 
        [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        $students = Student::create($input);

        $data = 
        [
            'message' => 'Student is created',
            'data' => $students
        ];

        return response()->json($data, 201);
    }
}
