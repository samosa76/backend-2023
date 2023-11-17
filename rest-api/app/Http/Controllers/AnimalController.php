<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class AnimalController extends Controller
{

    public $animals = [
        [
            "name" => "Beruang",
            "habitat" => "Hutan"
        ],
        [
            "name" => "Sapi",
            "habitat" => "Peternakan"
        ],
        [
            "name" => "Ikan",
            "habitat" => "Danau"
        ]
    ];

    // testing penggunaan array

    // public $animals = ["Beruang", "Kucing", "Naga"];

    // public $tes = [
    //     "tes" => "1",
    //     "tem" => "2",
    // ];


    public function index(){
        foreach($this->animals as $tes => $value){
            echo $value["name"], ", ";
            // echo $value, "<br>";
        }
        //testing showing index with dump   
        // var_dump($this->tes);
        // print_r($this->animals);
    }

    public function store(Request $request){
        /*
        menambahkan data kedalam array
        */
        
        array_push($this->animals, $request);
        $this->index();
    }

    public function update(Request $request, $id){
        if (!isset($this->animals[$id])) {
            throw new Exception("invalid id");
        }
        $this->animals[$id] = $request;
        $this->index();
    }

    public function destroy($id){
        
        if (isNull($this->animals[$id]));
        

        /*
        penggunaan splice 
        $id digunakan uuntuk menentukan position
        {{1}} digunakan untuk menentukan jumlah item yang akan dihapus
        */

        array_splice($this->animals, $id, 1);

        /*
        penggunaan unset 
        $id digunakan untuk menentukan posisi 
        tidak perlu mengatur berapa banyak item yang akan dihapus 
        */

        // unset($this->animals[$id]);

        $this->index();
    }
}
