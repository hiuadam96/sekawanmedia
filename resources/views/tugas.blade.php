@extends('welcome')

@section('judul', 'TES SEKAWAN MEDIA')


@section('konten')
<div class='container' style='margin-center; margin-bottom:-50px'>

<table class='table-striped'>
	<tr style="height:50px">
		<th style="width:300px">ID Peg</th>
		<th style="width:300px">Nama Pegawai</th>
        <th style="width:300px">Gaji</th>
        <th style="width:300px">Usia</th>
        <th style="width:300px">Foto</th>
	</tr>
    @foreach($data as $d)
    <tr style="height:50px">
    
        <th style='width:300px'>{{$d->id}}</th>
        <th style='width:300px'>{{$d->employee_name}}</th>
        <th style='width:300px'>{{$d->employee_salary}}</th>
        <th style='width:300px'>{{$d->employee_age}}</th>
        <th style='width:300px'> </th>
    
    </tr>
    @endforeach
   
	
	
</table>



</div>
@endsection