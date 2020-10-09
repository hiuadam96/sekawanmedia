<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
    $buku = DB::table('buku')->paginate(10);

    return view('homeBook',['bukua'=>$buku]);
        
    }

    public function add(){
        return view('addBook');
    }
    public function form(){
        return view('addBook');
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $tahun = $request->input('tahun');
        return "Nama :".$nama.", Alamat :".$alamat.", Tahun Terbit :".$tahun;
    }
    public function delete($id){
        DB::table('buku')->where('id', $id)->delete();
        return redirect('/book');
    }
    public function store(Request $request){
        DB::table('buku')->insert([
            'nama'=>$request->nama,
            'penulis'=>$request->penulis,
            'deskripsi'=>$request->deskripsi,
            'link'=>$request->link
        ]);
        
        return redirect('/book/addbook');
    }
    public function edit($id){
        $buku=DB::table('buku')->where('id',$id)->get();

        return view('edit',['buku'=>$buku]);
    }
    public function vieew($id){
        $buku=DB::table('buku')->where('id',$id)->get();
        return view('vieew',['buku'=>$buku]);
    }


}
