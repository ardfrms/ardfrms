@extends('layouts.template')
@section('title', 'Semua Post')
@section('content')
<div class="wrapper">
 <h1 style="text-align: center;">Siswa</h1>
@if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
   <a href="siswa/create" class="btn btn-primary">Tambah Data</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($siswas as $siswa)
      <tr>
  <td style="width: 200px" >{{ $siswa->nama}}</td>
  <td style="width: 500px" >{{ $siswa->jurusan }}</td>
  <td style="width: 100px"><a class="btn btn-success" href="{{ route('siswa.edit', $siswa->id) }}">Edit</a></td>
  <form method="POST" action="{{ url('siswa',$siswa->id ) }}">
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
