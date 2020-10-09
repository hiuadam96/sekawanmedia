@extends('welcome')
@section('judul', 'MENAMBAH BUKU BARU')


@section('konten')
    @foreach($buku as $b)

	<form action="/addbook/proses" method="post">
    {{ csrf_field() }}
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama Buku :
		<input class ='col table-light' type="text" name="nama" required='required' value='{{$b->nama}}'> <br/>
		Penulis :
		<input class ='col table-light' type="text" name="penulis" required='required' value='{{$b->penulis}}'> <br/>
        Deskripsi:
        <input class ='col table-light'name="deskripsi" style='height:100px' required='required' value='{{$b->deskripsi}}'></input> <br/>
        Link Buku:
        <input class ='col table-light' type="link" name="link" required='required' value='{{$b->link}}'> <br/>
		<input onclick='alertUpdated()' class='btn btn-success 'type="submit" value="Simpan" style='margin-top:20px'>
	</form>
    @endforeach
@endsection