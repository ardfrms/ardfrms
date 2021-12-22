<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = siswa::all();

        return view('siswa.index', ['siswas'=> $siswas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'nama'=>'required|unique:siswas|max:150',
          'jurusan'=>'required',
      ]);
          $input = $request->except(['_token']);
      
      $siswa = siswa::create($input);

      return back()->with('success', 'post baru berhasil dibuat.');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa= siswa::findOrFail($id);
   
        return view('siswa.edit', [
          'siswa' => $siswa
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
     'nama' => 'required|unique:siswas|max:150',
     'jurusan' => 'required',
  ]);
        
  $siswa = siswa::find($id)->update($request->all()); 
         
  return back()->with('success',' Data telah diperbaharui!');
    }

    public function destroy($id)
    {
        $siswa = siswa::find($id);

   $siswa->delete();

   return back()->with('success',' Penghapusan berhasil.');
    }
}
