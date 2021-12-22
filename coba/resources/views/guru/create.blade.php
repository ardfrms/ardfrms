@extends('layouts.template')
@section('title', 'Data Guru')
@section('content')
<div class="wrapper">
  <h1>Buat Data Guru</h1>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="card w-50">
    <div class="card-header bg-secondary text-white">
      <h5>Tambah Data Guru</h5>
    </div>
    <div class="card-body">
  <form method="post" action="{{ url('guru') }}">
    @csrf
    <div class="form-group">
      <label>NIP</label>
      <input class="form-control"  name="nip" type="text" placeholder="NIP"> 
    </div>
    <div class="form-group">
      <label>Nama Guru</label>
    <input class="form-control"  name="nama_guru" type="text" placeholder="Nama Guru">
  </div>
  <div class="form-group">
      <label>Mapel</label>
    <input class="form-control"  name="mapel" type="text" placeholder="Mapel">
  </div>
    <div class="card-footer">
    <button class="btn btn-secondary">Submit</button>
  </form>
  <a href="/guru"class="btn btn-secondary">Kembali</a></div>
  </div>
</div>
@endsection
