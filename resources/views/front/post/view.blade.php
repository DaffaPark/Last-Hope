@extends('layouts.front')
@section('meta_descriptions', "$post->meta_description")
@section('meta_keyword', "$post->meta_keyword")
@section('title', "$post->meta_title")
@section('content')
<div class="lg:w-[60vw] max-w-screen-lg lg:pt-4 lg:p-4">
<div class="navbar bg-base-100 lg:hidden sticky top-0 w-full z-50">
                    <div class="flex-none">
                      <label
                        for="my-drawer-2"
                        class="btn btn-square btn-ghost lg:hidden"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          class="inline-block w-5 h-5 stroke-current"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                          ></path>
                        </svg>
                      </label>
                    </div>
                    <div class="flex-1">
                      <a class="btn btn-ghost normal-case text-xl" href="./">Daffa Blog</a>
                    </div>
                    <div class="flex-none">
                      <button
                        data-set-theme="winter"
                        class="btn btn-sm btn-ghost btn-square"
                        data-act-class="btn-active"
                      >
                        <svg
                          class="inline-block w-4 h-4 fill-current"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                        >
                          <title>ionicons-v5-q</title>
                          <path
                            d="M256,118a22,22,0,0,1-22-22V48a22,22,0,0,1,44,0V96A22,22,0,0,1,256,118Z"
                          />
                          <path
                            d="M256,486a22,22,0,0,1-22-22V416a22,22,0,0,1,44,0v48A22,22,0,0,1,256,486Z"
                          />
                          <path
                            d="M369.14,164.86a22,22,0,0,1-15.56-37.55l33.94-33.94a22,22,0,0,1,31.11,31.11l-33.94,33.94A21.93,21.93,0,0,1,369.14,164.86Z"
                          />
                          <path
                            d="M108.92,425.08a22,22,0,0,1-15.55-37.56l33.94-33.94a22,22,0,1,1,31.11,31.11l-33.94,33.94A21.94,21.94,0,0,1,108.92,425.08Z"
                          />
                          <path
                            d="M464,278H416a22,22,0,0,1,0-44h48a22,22,0,0,1,0,44Z"
                          />
                          <path d="M96,278H48a22,22,0,0,1,0-44H96a22,22,0,0,1,0,44Z" />
                          <path
                            d="M403.08,425.08a21.94,21.94,0,0,1-15.56-6.45l-33.94-33.94a22,22,0,0,1,31.11-31.11l33.94,33.94a22,22,0,0,1-15.55,37.56Z"
                          />
                          <path
                            d="M142.86,164.86a21.89,21.89,0,0,1-15.55-6.44L93.37,124.48a22,22,0,0,1,31.11-31.11l33.94,33.94a22,22,0,0,1-15.56,37.55Z"
                          />
                          <path
                            d="M256,358A102,102,0,1,1,358,256,102.12,102.12,0,0,1,256,358Z"
                          />
                        </svg>
                      </button>
                      <button
                        data-set-theme="garden"
                        class="btn btn-sm btn-ghost btn-square"
                        data-act-class="btn-active"
                      >
                        <svg
                          class="inline-block w-4 h-4 fill-current"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="2"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                          />
                        </svg>
                      </button>
                      <button
                        data-set-theme="dark"
                        class="btn btn-sm btn-ghost btn-square"
                        data-act-class="btn-active"
                      >
                        <svg
                          class="inline-block w-4 h-4 fill-current"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                        >
                          <title>ionicons-v5-j</title>
                          <path
                            d="M152.62,126.77c0-33,4.85-66.35,17.23-94.77C87.54,67.83,32,151.89,32,247.38,32,375.85,136.15,480,264.62,480c95.49,0,179.55-55.54,215.38-137.85-28.42,12.38-61.8,17.23-94.77,17.23C256.76,359.38,152.62,255.24,152.62,126.77Z"
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">
  
  <!-- Section: Design Block -->
  <section class="mb-32 bg-base-200 px-12 py-6 rounded-lg">
    @if (session('message'))
              <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 mt-4 shadow-md" role="alert">
                <p>{{ session('message') }}</p>
              </div>
              @endif
    <h1 class="font-bold text-3xl mb-4"> {!! $post->name !!}</h1>

    <p class="uppercase text-red-600 font-bold mb-6 flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-4 h-4 mr-2">
        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
        <path fill="currentColor"
          d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z" />
        </svg>{!! $category->name !!}

    </p>
    <p class="uppercase font-bold mb-6 flex items-center" >
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
</svg> : {{ $post->created_at->format('d-m-Y') }} 
</p> 
     <p class="font-bold mb-2 flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>: {{ $post->user->name }} 
      </p> 

    <p class="mb-6 px-2 py-1">
     {!! $post->desc !!}
    </p>

    <div class="card bg-base-200 shadow-xl mt-4">
                <div class="card-body">
                   <form action="{{ url('comments') }}" method="POST" class="mt-4">
       @csrf
      <label for="comment" class="block">
        <input type="hidden" name="post_slug" value="{{ $post->slug }}" >
        <textarea name="comment_body" id="comment" cols="30" rows="3" placeholder="Type your comment..." class="px-3 py-2 border shadow-sm border-gray-300 rounded-md w-full block placeholder:text-gray-400 placeholder-gray-500
          focus:outline-none focus:ring-1 bg-gray-50 focus:ring-blue-600 focus:border-blue-600 text-sm"></textarea>
      </label>
      <button type="submit" class="mt-2  inline-flex items-center justify-center text-gray-100 font-medium leading-none
             bg-blue-600 rounded-md py-2 px-3 border border-transparent transform-gpu hover:-translate-y-0.5 
             transition-all ease-in duration-300 hover:text-gray-200 hover:bg-blue-700 text-sm">
        Post comment
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 rotate-90" viewBox="0 0 20 20" fill="currentColor">
          <path
            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
        </svg>
      </button>
    </form>
    <div class="my-4">
      <small class="text-base font-bold text-gray-700 ml-1">{{ $post->comments->count() }} comments</small>
      <div class="flex flex-col mt-4">
        <div class="flex flex-row mt-4">
         
          <div class="flex-1 mt-2">
             @forelse ($post->comments as $comment)
            <div class="font-semibold text-gray-500 text-lg">
              @if ($comment->user)
              {{ $comment->user->name }}
              @endif
              <span class="text-lg font-normal text-gray-500">| {{ $comment->created_at->format('d-m-Y') }}</span>
            </div>
            <div class="text-lg text-gray-500">
              {{ $comment->comment_body }}
            </div>
            <div class="flex items-center text-lg mt-1">
              @if (Auth::Check() && Auth::id() == $comment->user_id)
               <a href="/hapus/{{ $comment->id }}" class="text-blue-500 hover:text-blue-600">Delete</a>
              @endif
            </div>
            @empty
            <h6>There's no comment yet</h6>
            @endforelse
          </div>
        </div>
      </div>
    </div>
                </div>
              </div>
  </section>
  <!-- Section: Design Block -->
  
</div>
<!-- Container for demo purpose --></div>
@endsection