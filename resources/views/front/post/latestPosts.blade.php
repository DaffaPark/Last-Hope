@extends('layouts.front')
@section('meta_descriptions', "FlowBlog")
@section('meta_keyword', "FlowBlog")
@section('title', "FlowBlog")
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
                      <a class="btn btn-ghost normal-case text-xl" href="./">Last Hope Blog</a>
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
                  <div class="card bg-base-200 shadow-xl">
                <div class="card-body">
                  <h1 class="md:text-3xl font-extrabold">
                   Posts
                  </h1>
                </div>
              </div>
                  <div class="flex-1 p-3 md:py-[35]">
                    <div class="space-y-2 md:space-y-6">
                    @forelse ($allposts as $latest_post_item)
                      <div class="card card-side bg-base-200 shadow-xl">
                        <div class="card-body">
                          <a href="{{ url('category/'.$latest_post_item->kategori->slug.'/'.$latest_post_item->slug) }}" class="card-title">
                          {{ $latest_post_item->name }}
                          </a>
                          <div class="justify-start">
                            <a href="{{ url('category/'.$latest_post_item->kategori->slug.'/'.$latest_post_item->slug) }}" class="btn btn-xs btn-accent"> {{ $latest_post_item->kategori->name }}</a>
                          </div>
                          <p class="uppercase font-bold mb-6 flex items-center" >
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
</svg> : {{ $latest_post_item->created_at->format('d-m-Y') }} 
</p> 
     <p class="font-bold mb-2 flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>: {{ $latest_post_item->user->name }} 
      </p> 
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Rhoncus dolor purus non enim. Purus viverra accumsan in nisl.
                            Aliquam faucibus purus in massa. In vitae turpis massa sed
                            elementum tempus egestas. Nisl purus in mollis nunc sed.
                            Ullamcorper morbi tincidunt ornare massa eget. Enim nulla
                            aliquet porttitor lacus luctus accumsan. Id neque aliquam
                            vestibulum morbi blandit cursus. Pellentesque eu tincidunt
                            tortor aliquam nulla facilisi cras. Sed augue lacus viverra
                            vitae.
                          </p>
                        </div>
                        @empty
                      <h1 class="mx-4 my-4 text-center md:text-3xl font-extrabold">
                  Sorry! There's No Latest Post Yet.
                  </h1>
                      </div>
                      
                      @endforelse
                     
                    </div>
                    <div class="divider"></div>
                    <p class="text-sm pl-4">© 2022 Daffa Blog</p>
                    <p class="text-xs pl-4">
                      Sarissa theme design by
                      <a class="link" href="https://github.com/iozcelik">iozcelik</a>
                    </p>
                  </div>
        
                </div>
@endsection
   