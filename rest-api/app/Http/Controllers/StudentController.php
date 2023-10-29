<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        // $students = Student::latest()->get();
        // $students = Student::where('id',1)->get();
        // $students = $this->student->getStudents();
        

        $data = 
        [
            'message' => 'showing all students',
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
            'message' => 'student is created',
            'data' => $students
        ];

        return response()->json($data, 201);
    }
    public function destroy(Student $student)
    {
        $student->delete();

        $data = 
        [
            'message' => 'student has been remove',
            'data' => [],
            'success' => true
        ];

        return response()->json($data, 204);

    }
    public function update(Request $request, Student $student)
    {
        $student->update(
            [
                'nama' => $request->get('nama'),
                'email' => $request->get('email')
                
            ]
        );
        return response()->json([
            'data' => $student,
            'message' => 'student updated successfully',
            'success' => true
        ]);
    }
}
