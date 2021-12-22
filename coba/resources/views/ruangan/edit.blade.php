<!-- //views/post/edit.blade.php -->
@extends('layouts.template')
@section('title', 'ruangan
 edit')
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
  
  <form method="POST" action="{{ url('ruangan', $ruangan->id ) }}">
    @csrf
    @method('PUT')
    <input name="nama_gedung" value="{{ $ruangan->nama_gedung }}" type="text" placeholder="nama_gedung"> 
    <button class="btn-blue">Submit</button>
  </form>
  <a href="/ruangan" style="color:black; !important">Kembali</a>
</div>
@endsection
