<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return view('calc');
    }
    public function proses(Request $request){
        $id = $request->input('id');
        $nama = $request->input('employee_name');
        $salary = $request->input('employee_salary');
        $age = $request->input('employee_age');

        return "id :".$id.", employe_name :".$nama.", employee_salary :".$salary.", employee_age :".$age;
    }
}
