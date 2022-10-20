<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
	{
	    $user = User::findOrFail(Auth::id());

	    return view('users.profile', compact('user'));
	}

	public function update(Request $request, $id)
	{
	    request()->validate([
	        'name'       => 'required|string|min:2|max:100',
	        'email'      => 'required|email|unique:users,email, ' . $id . ',id',
	        'old_password' => 'nullable|string',
	        'password' => 'nullable|required_with:old_password|string|confirmed|min:6'
	    ]);

	    $user = User::find($id);

	    $user->name = $request->name;
	    $user->email = $request->email;

	    if ($request->filled('old_password')) {
	        if (Hash::check($request->old_password, $user->password)) {
	            $user->update([
	                'password' => Hash::make($request->password)
	            ]);
	        } else {
	            return back()
	                ->withErrors(['old_password' => __('Please enter the correct password')])
	                ->withInput();
	        }
	    }

	    if($request->hasfile('photo')){

    	 	$destination = 'user/profile/'.$user->photo;
    	 	if(File::exists($destination)){
    	 		File::delete($destination);
    	 	}
    	 	$file = $request->file('photo');
    	 	$filename = time() . '.' . $file->getClientOriginalExtension();
    	 	$file->move('user/profile/', $filename);
    	 	$user->photo = $filename;
    	 }


	    $user->save();

	    return back()->with('status', 'Profile updated!');
	}
}
