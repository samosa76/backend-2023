<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $student;
    public function __construct() {
        $this->student = new Student;
    }
    public function index()
    {
        /*
        Using eloquent to get all data
        */
        // $students = Student::all();
        // $students = Student::latest()->get();
        // $students = Student::where('id',1)->get();

        /*
        Using model to get all data
        */

        $students = $this->student->getAllStudent();
        

        $data = 
        [
            'message' => 'showing all students',
            'data' => $students
        ];

        return response()->json($data, 200);
    }
    public function store(Request $request)
    {
        /*
        Creat new data and save it to $input variable and
        Using eloquent to create data 
        */

        $input = 
        [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        $students = Student::create($input);

        /* 
        Using model to create new student 
        */

        // $students = $this->student->storeNewStudent($request);

        $data = 
        [
            'message' => 'student is created',
            'data' => $students
        ];

        return response()->json($data, 201);
    }
    public function destroy(Student $student)
    {
        /*
        Using eloquent to get delete data student
        */
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
        /*
        Using eloquent to update data student
        */
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
