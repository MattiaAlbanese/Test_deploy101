<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public $teachers = [
        ['id' => 1, 'name' => 'Katia', 'surname' => 'Perrucci', 'age' => 30, 'subject' => 'Laravel'],
        ['id' => 2, 'name' => 'Paolo', 'surname' => 'Tozzi', 'age' => 25, 'subject' => 'PHP'],
        ['id' => 3, 'name' => 'Mattia', 'surname' => 'Albanese', 'age' => 32, 'subject' => 'CSS'],
        ['id' => 4, 'name' => 'Angelo', 'surname' => 'Cardone', 'age' => 34, 'subject' => 'JS'],
    ];

    public function index(){
        return view('docenti', ['insegnanti' => $this->teachers]);
    }

    public function show($id){
        foreach($this->teachers as $teacher){
            if($teacher['id'] == $id){
                return view('dettaglio-docente', ['insegnante' => $teacher]);
            }
        }
    }
}
