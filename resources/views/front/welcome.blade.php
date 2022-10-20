@extends('layouts.front')
@section('meta_descriptions', "FlowBlog")
@section('meta_keyword', "FlowBlog")
@section('title', "FlowBlog")
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
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
 <div class="sliderA h-auto mt-12 mx-2 my-1">
      <div id="slider-1" class="container mx-auto">
        <div class="bg-cover bg-center rounded h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
       <div class="md:w-1/2">
        <p class="font-bold text-sm uppercase">Last Hope Blog</p>
        <p class="text-3xl font-bold">Welcome To The Last Hope Blog </p>
        <p class="text-2xl mb-10 leading-none">Where Your Last Hope Be Seen.</p>
       
        </div>  
    </div> <!-- container -->
      <br>
      </div>

      <div id="slider-2" class="container mx-auto">
        <div class="bg-cover bg-top rounded h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">
       
  <p class="font-bold text-sm uppercase">Services</p>
        <p class="text-3xl font-bold">Wanted to Post Your Last Hope? </p>
        <p class="text-2xl mb-10 leading-none">Contact Admin or Blog Manager.</p>
        <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
         
    </div> <!-- container -->
      <br>
      </div>
    </div>
 <div  class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
    <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
  </div>
  <p class="my-4 text-2xl px-4">
    welcome to last hope blog, I built this simple website because of my curiosity about web programming.
  </p>
  <hr class="my-6">
  <h1 class=" ml-4 md:text-3xl font-extrabold">
                  Latest Posts
                  </h1>
  @foreach ($latest_post as $latest_post_item)
  <div class="p-6 mx-4 my-6 rounded-lg border border-gray-200 shadow-md  dark:bg-gray-800 dark:border-gray-700">
    <a href="{{ url('category/'.$latest_post_item->kategori->slug.'/'.$latest_post_item->slug) }}">
        <h5 class="mb-2 text-2xl font-bold tracking-tig dark:text-white">{{ $latest_post_item->name }}</h5>
    </a>
    <p class="mb-3 font-normal dark:text-gray-400">Posted On : {{ $latest_post_item->created_at->format('d-m-Y') }}.</p>
    <p class="mb-3 font-normal dark:text-gray-400">Posted By : {{ $latest_post_item->user->name }}.</p>
    <a href="{{ url('category/'.$latest_post_item->kategori->slug.'/'.$latest_post_item->slug) }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Read more
        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
</div>
@endforeach
<hr class="my-6">
 <h1 class=" ml-4 md:text-3xl font-extrabold">
                  Creator
                  </h1>
  <div class=" dark:bg-gray-900 flex flex-wrap items-center justify-center">
  <div class="container max-w-lg bg-base-200 rounded dark:bg-gray-800 shadow-lg transform duration-200 easy-in-out m-12">
    <div class="h-2/4 sm:h-64 overflow-hidden">
      <img class="w-full rounded-t"
        src="{{ asset('public/assets/img/insta2.jpg') }}"
        alt="Photo by aldi sigun on Unsplash" />
    </div>
    <div class="flex justify-start px-5 -mt-12 mb-5">
      <span clspanss="block relative h-32 w-32">
        <img alt="Photo by aldi sigun on Unsplash"
          src="{{ asset('public/assets/img/INSTA.jpg') }}"
          class="mx-auto object-cover rounded-full h-24 w-24 bg-white p-1" />
      </span>
    </div>
    <div class="">
      <div class="px-7 mb-8">
        <h2 class="text-3xl font-bold  dark:text-gray-300">Daffa Park</h2>
        <p class="mt-2 dark:text-gray-400">Programmer</p>
        <p class="mt-2 dark:text-gray-300">just a normal hignschool student who loves programming but goes to sleep when he meets an error.</p>
        <div class="flex flex-wrap justify-center gap-2 sm:gap-4 mt-8">
           <a class="px-4" href="https://www.instagram.com/daffapark_/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="px-4" href="https://github.com/DaffaPark">
                    <i class="fab fa-github"></i>
                </a>

        </div>
      </div>
    </div>
  </div>
</div>
                    
                    
                     
       
                    <div class="divider"></div>
                    <p class="text-sm pl-4">© 2022 Daffa Blog</p>
                    <p class="text-xs pl-4">
                      Sarissa theme design by
                      <a class="link" href="https://github.com/iozcelik">iozcelik</a>
                    </p>
                  
</div>
@endsection
   