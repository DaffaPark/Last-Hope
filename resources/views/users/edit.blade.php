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
                <span>Edit Users</span>
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

{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
<div class="container px-6 mx-auto grid">
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Name</span>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-controlblock w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input')) !!}
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Email</span>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-controlblock w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input')) !!}
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Password</span>
                 {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control form-controlblock w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input')) !!}
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Confirm Password</span>
                 {!! Form::password('confirm-password', array('placeholder' => 'Password','class' => 'form-control form-controlblock w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input')) !!}
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  Roles
                </span>
                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray','multiple')) !!}
              </label>
              <button type="submit" class="mt-4 ml-2 mb-2 px-3 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Submit</button>
              <a class="mt-4 ml-2 mb-2 px-3 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="/users">Back</a>
    </div>
</div>
        
    
            {!! Form::close() !!}
@endsection