@extends('layouts.template')
@section('title', 'Semua Post')
@section('content')
<div class="wrapper">
 <h1 style="text-align: center;">Guru</h1>
@if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
   <a href="guru/create" class="btn btn-primary">Tambah Data</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NIP</th>
        <th>NAMA GURU</th>
        <th>MAPEL</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($gurus as $guru)
      <tr>
  <td style="width: 200px" >{{ $guru->nip}}</td>
  <td style="width: 500px" >{{ $guru->nama_guru }}</td>
  <td style="width: 500px" >{{ $guru->mapel }}</td>
  <td style="width: 100px"><a class="btn btn-success" href="{{ route('guru.edit', $guru->id) }}">Edit</a></td>
  <form method="POST" action="{{ url('guru',$guru->id ) }}">
    @csrf
    @method('DELETE')
    <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td>
  </form>
</tr>
@endforeach
    </tbody>
  </table>

</div>
@endsection
