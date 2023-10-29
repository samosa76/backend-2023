<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $user = 
        [
            'nama' => 'Test Ing',
            'jurusan' => 'Su Kses'
        ];

        return response()->json($user, 200);
    }
}
