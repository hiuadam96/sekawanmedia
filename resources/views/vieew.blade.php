@extends('welcome')
@section('konten')
@foreach($buku as $buku)

<div class="card">
  <div class="card-body">
    <h4 class="card-title text-center">{{$buku->nama}}</h4>
    <p class="card-text">{{$buku->deskripsi}}</p>
    <h6 class="footer">{{$buku->penulis}}</h4>
    <a href="edit/{{$buku->id}}" class="btn btn-warning float-right">Edit</a>
  </div>
</div>
@endforeach
@endsection