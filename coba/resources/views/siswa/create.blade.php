@extends('layouts.template')
@section('title', 'Data Siswa')
@section('content')
<div class="wrapper">
  <h1>Buat Data Siswa</h1>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
 <div class="card w-70">
    <div class="card-header bg-secondary text-white">
      <h5>Tambah Data Siswa</h5>
    </div>
    <div class="card-body">
  <form method="post" action="{{ url('siswa') }}">
    @csrf
    <div class="form-group">
      <label>NAMA SISWA</label>
      <input class="form-control"  name="nama" type="text" placeholder="NAMA"> 
    </div>
    <div class="form-group">
      <label>JURUSAN</label>
    <input class="form-control"  name="jurusan" type="text" placeholder="JURUSAN">
  </div>
    <div class="card-footer">
    <button class="btn btn-secondary">Submit</button>
  </form>
  <a href="/siswa"class="btn btn-secondary">Kembali</a></div>
  </div>
@endsection
