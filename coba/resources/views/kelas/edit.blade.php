<!-- //views/post/edit.blade.php -->
@extends('layouts.template')
@section('title', 'kelas edit')
@section('content')
<div class="wrapper">
  <h1>kelas Post</h1>
  
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
  
  <form method="POST" action="{{ url('kelas', $kelas->id ) }}">
    @csrf
    @method('PUT')
    <input name="nama" value="{{ $kelas->nama }}" type="text" placeholder="nama"> 
    <button class="btn-blue">Submit</button>
  </form>
  <a href="/kelas" style="color:black; !important">Kembali</a>
</div>
@endsection
