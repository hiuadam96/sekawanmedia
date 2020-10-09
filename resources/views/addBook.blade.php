@extends('welcome')
@section('judul', 'MENAMBAH BUKU BARU')


@section('konten')
	<form action="/addbook/proses" method="post">
    {{ csrf_field() }}
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama Buku :
		<input class ='col table-light' type="text" name="nama" required='required'> <br/>
		Penulis :
		<input class ='col table-light' type="text" name="penulis" required='required'> <br/>
        Deskripsi:
        <textarea class ='col table-light'name="deskripsi" style='height:100px' required='required'></textarea> <br/>
        Link Buku:
        <input class ='col table-light' type="link" name="link" required='required'> <br/>
		<input onclick='alertAdded()' class='btn btn-success'type="submit" value="Simpan" style='margin-top:20px'>
	</form>

@endsection