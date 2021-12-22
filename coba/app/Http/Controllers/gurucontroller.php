<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;

class gurucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = guru::all();

        return view('guru.index', ['gurus'=> $gurus]);
    }

  
    public function create()
    {
        return view('guru.create');
    }

   
    public function store(Request $request)
    {
         $request->validate([
          'nip'=>'required|unique:gurus|max:150',
          'nama_guru'=>'required',
          'mapel'=>'required',
      ]);
          $input = $request->except(['_token']);
      
      $guru = guru::create($input);

      return back()->with('success', 'post baru berhasil dibuat.');  
    }

 
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
   $guru = guru::findOrFail($id);
   
   return view('guru.edit', [
          'guru' => $guru
   ]);
 }

public function update(Request $request, $id)
{
  $request->validate([
     'nip' => 'required|unique:gurus|max:150',
     'nama_guru' => 'required',
     'mapel' => 'required', 
  ]);
        
  $guru = guru::find($id)->update($request->all()); 
         
  return back()->with('success',' Data telah diperbaharui!');
}


    public function destroy($id)
    {
         $guru = guru::find($id);

   $guru->delete();

   return back()->with('success',' Penghapusan berhasil.');
    }
}
