@extends('welcome')
@section('judul', 'MENAMBAH DATA SEKAWAN MEDIA')


@section('konten')
	<form action="/tugastambah" method="post">
    {{ csrf_field() }}
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	ID PEGAWAI :
		<input class ='col table-light' type="text" name="id" required='required'> <br/>
		NAMA PEGAWAI :
		<input class ='col table-light' type="text" name="employee_name" required='required'> <br/>
        SALARY PEGAWAI :
        <input class ='col table-light' type="text" name="employee_salary" required='required'> <br/>
        UMUR PEGAWAI :
        <input class ='col table-light' type="text" name="employee_age" required='required'> <br/>

        <input onclick='alertAdded()' class='btn btn-success'type="submit" value="Simpan" style='margin-top:20px'>
	</form>

@endsection