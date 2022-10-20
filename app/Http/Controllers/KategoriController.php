<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KategoriFormRequest;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class KategoriController extends Controller
{
	function __construct()
    {
         $this->middleware('permission:kategori-list|kategori-create|kategori-edit|kategori-delete', ['only' => ['index','show']]);
         $this->middleware('permission:kategori-create', ['only' => ['create','store']]);
         $this->middleware('permission:kategori-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:kategori-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
    	$kategoris = Kategori::latest()->paginate(5);
        $user = User::findOrFail(Auth::id());
        return view('kategoris.index',compact('kategoris','user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $user = User::findOrFail(Auth::id());
        return view('kategoris.create',compact('user'));
    }

    public function store(KategoriFormRequest $request)
    {
    	 $data = $request->validated();

    	 $kategori = new Kategori;

    	 $kategori->name = $data['name'];
    	 $kategori->slug = Str::slug($data['slug']);
    	 $kategori->desc = $data['desc'];

    	 if($request->hasfile('image')){
    	 	$file = $request->file('image');
    	 	$filename = time() . '.' . $file->getClientOriginalExtension();
    	 	$file->move('uploads/kategori/', $filename);
    	 	$kategori->image = $filename;
    	 }

    	 $kategori->meta_title = $data['meta_title'];
    	 $kategori->meta_descs = $data['meta_descs'];
    	 $kategori->meta_keyword = $data['meta_keyword'];

    	 $kategori->navbar_status = $request->navbar_status == true ? '1':'0';
    	 $kategori->status = $request->status == true ? '1':'0';
    	 $kategori->created_by = Auth::user()->id;
    	 $kategori->save();

    	  return redirect()->route('kategoris.index')
                        ->with('success','Category created successfully.');
    }

    public function edit(Kategori $kategori)
    {
         $user = User::findOrFail(Auth::id());
    	return view('kategoris.edit',compact('kategori','user'));
    }

    public function update(KategoriFormRequest $request, $kategori_id)
    {
    	$data = $request->validated();

    	 $kategori = Kategori::find($kategori_id);

    	 $kategori->name = $data['name'];
    	 $kategori->slug = Str::slug($data['slug']);
    	 $kategori->desc = $data['desc'];



    	 if($request->hasfile('image')){

    	 	$destination = 'uploads/kategori/'.$kategori->image;
    	 	if(File::exists($destination)){
    	 		File::delete($destination);
    	 	}
    	 	$file = $request->file('image');
    	 	$filename = time() . '.' . $file->getClientOriginalExtension();
    	 	$file->move('uploads/kategori/', $filename);
    	 	$kategori->image = $filename;
    	 }

    	 $kategori->meta_title = $data['meta_title'];
    	 $kategori->meta_descs = $data['meta_descs'];
    	 $kategori->meta_keyword = $data['meta_keyword'];

    	 $kategori->navbar_status = $request->navbar_status == true ? '1':'0';
    	 $kategori->status = $request->status == true ? '1':'0';
    	 $kategori->created_by = Auth::user()->id;
    	 $kategori->update();

    	 return redirect()->route('kategoris.index')
                        ->with('success','Category Updated successfully.');
    }
    public function destroy(Kategori $kategori)
    {
    	if($kategori){

    	 	$destination = 'uploads/kategori/'.$kategori->image;
    	 	if(File::exists($destination)){
    	 		File::delete($destination);
    	 	}
    	 }
        $kategori->post()->delete();
        $kategori->delete();
    
        return redirect()->route('kategoris.index')
                        ->with('success','kategori deleted successfully');
    }
}
