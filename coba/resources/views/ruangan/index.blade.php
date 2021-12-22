@extends('layouts.template')
@section('title', 'Semua Post')
@section('content')
<div class="wrapper">
 <h1 style="text-align: center;">Ruangan</h1>
@if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
   <a href="ruangan/create" class="btn btn-primary">Tambah Data</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NAMA</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ruangans as $ruangan)
      <tr>
  <td style="width: 200px" >{{ $ruangan->nama_gedung}}</td>
  <td style="width: 100px"><a class="btn btn-success" href="{{ route('ruangan.edit', $ruangan->id) }}">Edit</a></td>
  <form method="POST" action="{{ url('ruangan',$ruangan->id ) }}">
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
