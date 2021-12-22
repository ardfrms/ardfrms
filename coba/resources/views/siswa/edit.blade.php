<!-- //views/post/edit.blade.php -->
@extends('layouts.template')
@section('title', 'siswa edit')
@section('content')
<div class="wrapper">
  <h1>siswa Post</h1>
  
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
  
  <form method="POST" action="{{ url('siswa', $siswa->id ) }}">
    @csrf
    @method('PUT')
    <input name="nama" value="{{ $siswa->nama }}" type="text" placeholder="nama"> 
    <input name="jurusan" value="{{ $siswa->jurusan }}" type="text" placeholder="jurusan">
    <button class="btn-blue">Submit</button>
  </form>
  <a href="/siswa" style="color:black; !important">Kembali</a>
</div>
@endsection
