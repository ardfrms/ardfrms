@extends('layouts.template')
@section('title', 'Semua Post')
@section('content')
<div class="wrapper">
 <h1 style="text-align: center;">Kelas</h1>
@if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
   <a href="kelas/create" class="btn btn-primary">Tambah Data</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NAMA</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kelass as $kelas)
      <tr>
  <td style="width: 200px" >{{ $kelas->nama}}</td>
  <td style="width: 100px"><a class="btn btn-success" href="{{ route('kelas.edit', $kelas->id) }}">Edit</a></td>
  <form method="POST" action="{{ url('kelas',$kelas->id ) }}">
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
