<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\PostFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class PostController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index','show']]);
         $this->middleware('permission:post-create', ['only' => ['create','store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::with('user')->get();
        $user = User::findOrFail(Auth::id());
        return view('posts.index',compact('posts','user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::findOrFail(Auth::id());
        $kategori = Kategori::where('status','0')->get();
        return view('posts.create',compact('kategori','user'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        $data = $request->validated();

        $post = new Posts;
         $post->kategori_id = $data['kategori_id'];

         $post->name = $data['name'];
         $post->slug = Str::slug($data['slug']);
         $post->desc = $data['desc'];

         $post->yt_iframe = $data['yt_iframe'];

         $post->meta_title = $data['meta_title'];
         $post->meta_description = $data['meta_description'];
         $post->meta_keyword = $data['meta_keyword'];

         $post->status = $request->status == true ? '1':'0';
         $post->created_by = Auth::user()->id;
         $post->save();
    
        return redirect()->route('posts.index')
                        ->with('success','Posts created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $post
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post_id)
    {
        $user = User::findOrFail(Auth::id());
        $kategori = Kategori::where('status','0')->get();
        $post = Posts::find($post_id);
        return view('posts.edit',compact('post','kategori','user'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostFormRequest $request, $post_id)
    {
         $data = $request->validated();

         $post = Posts::find($post_id);
         $post->kategori_id = $data['kategori_id'];
         $post->name = $data['name'];
         $post->slug = Str::slug($data['slug']);
         $post->desc = $data['desc'];

         $post->yt_iframe = $data['yt_iframe'];

         $post->meta_title = $data['meta_title'];
         $post->meta_description = $data['meta_description'];
         $post->meta_keyword = $data['meta_keyword'];

         $post->status = $request->status == true ? '1':'0';
         $post->created_by = Auth::user()->id;         
         $post->update();
    
        return redirect()->route('posts.index')
                        ->with('success','posts updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $post = Posts::find($post_id);
        $post->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','post deleted successfully');
    }
}

