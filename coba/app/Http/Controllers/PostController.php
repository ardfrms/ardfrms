<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();

        return view('index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
          'title'=>'required|unique:posts|max:150',
          'body'=>'required',

      ]);

      $input = $request->all();
      
      $Post = Post::create($input);

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
        $post = Post::findOrFail($id);
   
   return view('post.edit', [
          'post' => $post
   ]);

    }

    
    public function update(Request $request, $id)
    {
          $request->validate([
     'title' => 'required|unique:posts|max:150',
     'body' => 'required', 
  ]);
        
  $post = Post::find($id)->update($request->all()); 
         
  return back()->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Post::find($id);

   $post->delete();

   return back()->with('success',' Penghapusan berhasil.');
    }
}
