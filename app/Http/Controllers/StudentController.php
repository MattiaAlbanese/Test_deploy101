<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $students = [
        ['id' => 1, 'name' => 'Mario', 'surname' => 'Rossi', 'age' => 25, 'subject' => 'CSS'],
        ['id' => 2, 'name' => 'Anna', 'surname' => 'Bianchi', 'age' => 20, 'subject' => 'JS'],
        ['id' => 3, 'name' => 'Tizio', 'surname' => 'Verdi', 'age' => 33, 'subject' => 'PHP'],
        ['id' => 4, 'name' => 'Caio', 'surname' => 'Neri', 'age' => 19, 'subject' => 'Laravel'],
    ]; 

    public function index(){
        return view('studenti', ['studenti' => $this->students]);
    }

    public function show($id){
        foreach($this->students as $student){
            if($id == $student['id']){
                return view('dettaglio-studente', ['studente' => $student]);
            }
        }
    }
}
