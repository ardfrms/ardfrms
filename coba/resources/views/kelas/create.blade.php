@extends('layouts.template')
@section('title', 'Data Kelas')
@section('content')
<div class="wrapper">
  <h1>Buat Data Kelas</h1>
  
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
      <h5>Tambah Data Kelas</h5>
    </div>
    <div class="card-body">
  <form method="post" action="{{ url('kelas') }}">
    @csrf
    <div class="form-group">
      <label>Nama</label>
      <input class="form-control"  name="nama" type="text" placeholder="nama"> 
    </div>
    <div class="card-footer">
    <button class="btn btn-secondary">Submit</button>
  </form>
  <a href="/kelas"class="btn btn-secondary">Kembali</a></div>
  </div>
</div>
@endsection