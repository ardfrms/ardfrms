@extends('layouts.template')
@section('title', 'Data Ruangan')
@section('content')
<div class="wrapper">
  <h1>Buat Data Ruangan</h1>
  
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
    <div class="card w-50"></div> 
     <div class="card-header bg-secondary text-white">
      <h5>Tambah Data Ruangan</h5>
    </div>
    <div class="card-body">
  <form method="post" action="{{ url('ruangan') }}">
    @csrf
    <div class="form-group">
      <label>Nama</label>
      <input class="form-control"  name="nama_gedung" type="text" placeholder="nama gedung"> 
    </div>   
    <div class="card-footer">
    <button class="btn btn-secondary">Submit</button>
  </form>
  <a href="/ruangan"class="btn btn-secondary">Kembali</a></div>
  </div>
@endsection