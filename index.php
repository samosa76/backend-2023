<?php

class Animal 
{
    public $animals;
    public $id;

    public function __construct($data) {
        $this->animals = $data;
        $this->id = key($data);
    }

    public function index(){
        foreach ($this->animals as $index => $value ){
            if($index == 0){
                echo "<br>";
            }
            echo $value . "<br>";
        }
        echo "<br>";
    }

    public function store($data){
        array_push($this->animals, $data);

        return $this;

    }

    public function update($index, $data){
        $this->animals[$index] = $data;
        return $this;
    }

    public function destroy($index){
        unset($this->animals[$index]);
    }
    
}

//index : Show all data
echo "Menampilkan seluruh data";
$animals = new Animal(["sapi","Kucing","Ikan","Burung"]);
echo $animals->index();

//Store : Add new data
$animals->store("Kerbau");
echo "Telah menambahkan hewan (Kerbau)";
echo $animals->index();

//Update : Change old data to the new one
$animals->update(0, "Kadal");
echo "Merubah (Sapi) dengan (Kadal)";
echo $animals->index();

//Destroy: Selected data
$animals->destroy(4);
echo "Menghapus list urutan ke 5 (Kerbau)";
echo $animals->index();

?>