@extends('layouts.admin')


@section('content')
<div
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            >
              <div class="flex items-center">
                <svg
                  class="w-5 h-5 mr-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
                <span>Edit Category</span>
              </div>
            </div>



@if (count($errors) > 0)
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif


    <form action="{{ route('kategoris.update',$kategori->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('PUT')
  
              <div class="container px-6 mx-auto grid">
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md ">
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Category Name</span>
                <input type="text" name="name" value="{{ $kategori->name }}" class="form-control block w-full mt-1 text-sm dark:border-gray-600  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="name">
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Slug</span>
                <input type="text" name="slug" value="{{ $kategori->slug }}" class="form-control block w-full mt-1 text-sm dark:border-gray-600  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="slug">
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Description</span>
                <textarea id="summernote" class="form-control block w-full mt-1 text-sm dark:border-gray-600  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" style="height:150px" name="desc" placeholder="desc">{{ $kategori->desc }}</textarea>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Image</span>
                <input type="file" name="image" class="form-control block w-full mt-1 text-sm dark:border-gray-600  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="image">
              </label>
              <h6 class="mt-4">SEO Tags :</h6>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Meta Title</span>
                <input type="text" name="meta_title" value="{{ $kategori->meta_title }}" class="form-control block w-full mt-1 text-sm dark:border-gray-600  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="meta_title">
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Meta Description</span>
                <input type="text" name="meta_descs" value="{{ $kategori->meta_descs }}" class="form-control block w-full mt-1 text-sm dark:border-gray-600  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="meta_descs">
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Meta Keyword</span>
                <input type="text" name="meta_keyword" value="{{ $kategori->meta_keyword }}" class="form-control block w-full mt-1 text-sm dark:border-gray-600  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="meta_keyword">
              </label>
              <h6 class="mt-4">Status Mode :</h6>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Navbar Status</span>
                <input type="checkbox" name="navbar_status" class=" text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" placeholder="navbar_status" {{ $kategori->navbar_status == 1 ? 'checked':'' }}>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Status</span>
                <input type="checkbox" name="status" class=" text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" placeholder="status" {{ $kategori->status == 1 ? 'checked':'' }}>
              </label>
              <button type="submit" class="mt-4 ml-2 mb-2 px-3 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Submit</button>
              <a class="mt-4 ml-2 mb-2 px-3 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="{{ route('kategoris.index') }}">Back</a>
    </div>
</div>


    </form>

@endsection