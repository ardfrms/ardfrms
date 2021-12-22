<!-- //views/post/edit.blade.php -->
@extends('layouts.template')
@section('title', 'guru edit')
@section('content')
<div class="wrapper">
  <h1>Edit Post</h1>
  
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
  
  <form method="POST" action="{{ url('guru', $guru->id ) }}">
    @csrf
    @method('PUT')
    <input name="nip" value="{{ $guru->nip }}" type="text" placeholder="NIP"> 
    <input name="nama_guru" value="{{ $guru->nama_guru }}" type="text" placeholder="Nama Guru">
      <input name="mapel" value="{{ $guru->mapel }}" type="text" placeholder="Mapel">
    <button class="btn btn-success">Submit</button>
  </form>
  <a href="/guru" style="color:black; !important">Kembali</a>
</div>
@endsection
