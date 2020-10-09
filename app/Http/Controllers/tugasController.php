<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class tugasController extends Controller
{
    public function index(){
    $data = DB::table('data');

    return view('tugas',['data'=>$data]);
 
}
public function store(Request $request){
    DB::table('data')->insert([
        'id'=>$request->nama,
        'employee_name'=>$request->employee_name,
        'employee_salary'=>$request->employee_salary,
        'employee_age'=>$request->employee_age,

    ]);
    
    return redirect('/tugastambah');
}

public function tambah(){
    return view('tambah');
}
}
