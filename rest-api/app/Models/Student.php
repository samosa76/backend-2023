<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['nama','nim','email','jurusan'];
    public $timestamps = true;

    public function getAllStudent()
    {
        $student = DB::select('select * from students');
        return $student;
    }
    public function storeNewStudent(Request $input)
    {
        $student = DB::insert('insert into students (nama,nim,email,jurusan,created_at,updated_at) values(?,?,?,?,?,?)',
        [
            $input->nama,
            $input->nim,
            $input->email,
            $input->jurusan,
            $input->created_at,
            $input->updated_at
        ]);
        return $student;
    }

}
