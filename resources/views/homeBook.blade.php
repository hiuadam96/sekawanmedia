@extends('welcome')

@section('judul', 'DAFTAR BUKU')


@section('konten')
<div class='container' style='margin-center; margin-bottom:-50px'>

<table class='table-striped'>
	<tr style="height:50px">
		<th style="width:300px">Nama</th>
		<th style="width:300px">Penulis</th>
		<th style="width:300px">LINK</th>
		<th style="width:150px margin-btm:20px">Setting</th>
	</tr>
	@foreach($bukua as $b)
	<tr>
		<td>{{$b->nama}}</td>
		<td>{{$b->penulis}}</td>
		<td><a href='{{$b->link}}'>{{$b->link}}</td>
		<td><a type="button" class="btn btn-primary" href="book/vieew/{{$b->id}}">View</a><a type="button" class="btn btn-danger" href="book/delete/{{$b->id}}" onclick='alertDelete()'>Delete</a></td>
	</tr>
	
	@endforeach
</table>
<br/>
<br/>
Halaman : {{ $bukua->currentPage() }} <br/>
Jumlah Data : {{ $bukua->total() }} <br/>
Data Per Halaman : {{ $bukua->perPage() }} <br/>
<br/>
<br/>
<br/>
 {{ $bukua->links() }}

</div>
@endsection
