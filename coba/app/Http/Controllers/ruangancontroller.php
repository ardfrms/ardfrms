<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruangan;

class ruangancontroller extends Controller
{
    
    public function index()
    {
           $ruangans = ruangan::all();

        return view('ruangan.index', ['ruangans'=> $ruangans]);
    }


    public function create()
    {
          return view('ruangan.create');
    }

   
    public function store(Request $request)
    {
         $request->validate([
          'nama_gedung'=>'required|unique:ruangans|max:150',

    ]);      
           
    $input = $request->all();

  $ruangan = ruangan::create($input);
 
  return back()->with('success',' Post baru berhasil dibuat.');    
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $ruangan= ruangan::findOrFail($id);
   
        return view('ruangan.edit', [
          'ruangan' => $ruangan
        ]);
    }

    
    public function update(Request $request, $id)
    {
          $request->validate([
     'nama_gedung' => 'required|unique:ruangans|max:150',
  ]);
        
  $ruangan = ruangan::find($id)->update($request->all()); 
         
  return back()->with('success',' Data telah diperbaharui!');
    }

   
    public function destroy($id)
    {
           $ruangan = ruangan::find($id);

   $ruangan->delete();

   return back()->with('success',' Penghapusan berhasil.');
    }
}
